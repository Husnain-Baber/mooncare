#!/usr/bin/env python3
"""One-time converter: legacy/index.html body content -> resources/views/home.blade.php"""
import re

SRC = "legacy/index.html"
OUT = "resources/views/home.blade.php"

with open(SRC, encoding="utf-8") as f:
    lines = f.readlines()

# Extract content block: line 128 (HERO comment) .. line 611 (contact </section>)
body = "".join(lines[127:611])

reps = [
    # Must run before generic index.html replace
    (r'href="index\.html#contact"', "href=\"{{ route('home') }}#contact\""),
    (r'href="index\.html#services"', "href=\"{{ route('home') }}#services\""),
    (r'href="index\.html"', "href=\"{{ route('home') }}\""),
    (r'href="#contact"', "href=\"{{ route('home') }}#contact\""),
    (r'href="#services"', "href=\"{{ route('home') }}#services\""),
    (r'href="gallery\.html"', "href=\"{{ route('gallery') }}\""),
    (r'href="\./services/([a-z-]+)\.html"', "href=\"{{ route('services.show', '\\1') }}\""),
    # local gallery assets (src / href / data-full)
    (r'(src|href|data-full)="assets/images/gallery/([^"]+)"', "\\1=\"{{ asset('assets/images/gallery/\\2') }}\""),
    # inline "Submit another enquiry" onclick -> id bound in main.js
    (r'<button class="btn btn-outline-navy" onclick="[^"]*">Submit another enquiry</button>',
     '<button type="button" class="btn btn-outline-navy" id="resetAppointment">Submit another enquiry</button>'),
]

for pattern, repl in reps:
    body = re.sub(pattern, repl, body)

# sanity: no leftover local hrefs / onclick
leftover = re.findall(r'(href|src)="(\./)?(index|gallery|services)[^"]*"', body)
leftover += re.findall(r'onclick=', body)
if leftover:
    print("WARN leftover:", leftover)

blade = f"""@extends('layouts.app')

@section('title', 'Moon Elderly Care Center | Compassionate Home Nursing Care in Kulim')
@section('description', 'Moon Elderly Care Center provides best nursing care service in your area — assisted living, home nursing, dementia care, palliative care and more. Compassionate care at your doorstep.')

@section('content')
{body}
  @include('partials.lightbox')
@endsection
"""

with open(OUT, "w", encoding="utf-8", newline="\n") as f:
    f.write(blade)
print(f"wrote {OUT} ({len(blade.splitlines())} lines)")
