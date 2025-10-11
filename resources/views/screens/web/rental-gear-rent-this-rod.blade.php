@extends('layouts.web.app')

@push('styles')

@endpush

@section('content')
    @php
        $banner_image = null;
        $content = null;

        foreach ($rentalRodContent->cmsMeta as $item) {

            switch ($item) {

                case ($item->meta_key == 'hero_section_banner_image'):
                    $banner_image = $item->meta_value;
                    break;

                case ($item->meta_key == 'hero_section_banner_content'):
                    $content = json_decode($item->meta_value);
                    break;

                default:
                    # code...
                    break;
            }
        }
    @endphp
    <section class="tearm-condi-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-95e3d1f"
                        >
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-47cc901 dce_masking-none elementor-widget elementor-widget-image mb-5"
                                >
                                    <div class="elementor-widget-container text-center">
                                        <img decoding="async" width="250" height="250"
                                            src="{{ asset('storage/' . $banner_image) }}"
                                            class="attachment-full size-full wp-image-78" alt=""
                                            {{-- srcset="https://onlinedemolink.com/fly/wp-content/uploads/2023/09/Logo.png 250w, https://onlinedemolink.com/fly/wp-content/uploads/2023/09/Logo-150x150.png 150w" --}}
                                            sizes="(max-width: 250px) 100vw, 250px"
                                            >
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c800599 elementor-widget elementor-widget-text-editor">
                                    {{-- <div class="elementor-widget-container text-center">
                                        <p><em>Rent This Rod</em>&nbsp;is the premier source for renting premium fly-angling
                                            equipment to traveling anglers or those who are chasing fish species outside of
                                            their norm.&nbsp; Rather than purchasing costly equipment that might go unused
                                            the majority of the time, Rent This Rod has created the option of renting the
                                            same equipment at a fraction of the cost of ownership.&nbsp; Their partner
                                            brands include fly rods by Thomas &amp; Thomas, Sage, Mauser, and Tom Morgan
                                            Rodsmiths; reels by Hatch Outdoors, Ross Reels, and Abel; and fly line
                                            exclusively by Scientific Anglers – all top-tier, premium quality gear!</p>
                                        <p>&nbsp;</p>
                                        <p>Rent This Rod will ship gear directly to your door, ahead of your needed
                                            date(s).&nbsp; You can then travel to your fishing destination with your rental
                                            gear in-hand.&nbsp; Once you return, simply place the rental gear back in the
                                            box, slap on the included return label, and send it back to Rent This Rod.&nbsp;
                                            Simple as that.</p>
                                        <p>&nbsp;</p>
                                        <p>Anglers have the option of choosing either 10 or 14-days rental periods, and the
                                            shipping transit times are not included in the usage times – meaning you will
                                            have your gear available to fish or a solid 10 or 14 days before needing to
                                            return it.&nbsp; Rates (roundtrip economy shipping charges are included):</p>
                                        <p>&nbsp;</p>
                                        <p><strong>RENTAL PACKAGE RATES</strong></p>
                                        <div>
                                            <p>10-day rod/reel/line rentals from $185*</p>
                                            <p>14-day rod/reel/line rentals from $245*</p>
                                            <p>*Sales Tax not included in package rates</p>
                                            <p>&nbsp;</p>
                                            <p>Round-trip FedEx shipping costs (economy) are included in our prices.&nbsp;
                                                At this time we only ship to addresses within the U.S.&nbsp; If you need
                                                expedited shipping we can absolutely accommodate that at your expense.&nbsp;
                                                You will have the rod or rod/reel combo at your disposal for a solid 10 or
                                                14 days, depending on what package you prefer.&nbsp; Shipping transit times
                                                are not included in your rental days.&nbsp; When you’re all done, re-use the
                                                shipping tube or box that the rod/reel came in, take it to your local
                                                shipping office and mail it back to us – simple as that.</p>
                                            <p>&nbsp;</p>
                                        </div>
                                        <p>If you have any questions about what gear to rent for a specific destination or a
                                            particular fish species, contact the experts at Rent This Rod and they’ll take
                                            care of the rest!</p>
                                        <p>&nbsp;</p>
                                        <p><a href="http://www.rentthisrod.com/">www.rentthisrod.com</a></p>
                                        <p>rentals@rentthisrod.com</p>
                                        <p>828-712-6267</p>
                                    </div> --}}
                                    {!! $content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

@endpush
