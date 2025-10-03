@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <form id="signUpForm" action="#!">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="addyour-room pt-5">
                                <div class="payment-det-title">
                                    <h2>Add Room Type </h2>
                                    <p>
                                        The <strong><i>Room Type</i></strong> is a concept that allow you to describe the type of <strong><i>Accomodation</i></strong> and the <strong><i>max numbers of Guests</i></strong> that you will include in your Offer&Package. It is mandatory to add or customize the Room Type that meets your needs. This information will be visible to the Guests.
                                    </p>
                                    <p>For each <strong><i>Room Type</i></strong> you can also assign a <strong>name</strong> (it is useful when you have different accommodation that are part of the same fly fishing operation-for example if you have different Boat/Yacht or different Lodging).</p>
                                    <p>Because by default a list of Room Type are assigned for your Fishing Operation, it is important to choose your Room type before adding an <strong><i>Offer&Package</i></strong>. You can choose among:</p>
                                    <li class="list-style-dote"> <strong><i>ADD YOUR ROOM TYPE</i></strong> in case it is not listed (click here)</li>
                                    <li class="list-style-dote mt-2"> <strong>EDIT</strong> the Room Type listed, entering the missing information (Description, Photos and other details)</li>
                                    <li class="list-style-dote"> <strong>DELETE</strong> the Room Type listed, that you don't have in your Lodging</li>
                                    <p><a href="#!" class="text-blue">Remember</a>: <strong>for each <i>Room Type</i></strong> that will be included in your <i>Offer&Package</i>, <strong class="text-red">its mandatory</strong> upload your main photo before publishing!
                                        <br>Just click the button <strong>EDIT</strong> and upload the <strong><i>Featured image.</i></strong>
                                    </p>
                                    This photo will also be included in your flyonthemove.com Offer page.
                                    <div class="search-fishing-operat d-flex align-items-center justify-content-start flex-wrap gap-2">
                                        <h4 class="text-blue text-searchhd">Select Fishing Operation</h4>
                                        <div class=" d-flex align-items-center justify-content-start gap-5 w-100">
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="Please select the Room Category">All </option>
                                                <option value="+++++++++">+++++++++</option>
                                                <option value="abcd">abcd</option>
                                                <option value="Alaska Trophy Adventures Lodge">Alaska Trophy Adventures Lodge</option>
                                                <option value="Andes Drifters">Andes Drifters</option>
                                                <option value="Andes Drifters - Parana On The Fly">Andes Drifters - Parana On The Fly</option>
                                                <option value="Argentina Hunt">Argentina Hunt</option>
                                                <option value="Argentina Waters - Le Fario Lodge">Argentina Waters - Le Fario Lodge</option>
                                                <option value="Avalon Cayo Cruz">Avalon Cayo Cruz</option>
                                                <option value="Avalon-Cayo Largo">Avalon-Cayo Largo</option>
                                                <option value="Avalon - Isla de la Juventud">Avalon - Isla de la Juventud</option>
                                                <option value="Avalon Jardines de la Reina">Avalon Jardines de la Reina</option>
                                                <option value="Aylmer Lake Lodge">Aylmer Lake Lodge</option>
                                                <option value="Baja's Fishing Dream">Baja's Fishing Dream</option>
                                                <option value="Belousiha River Lodge">Belousiha River Lodge</option>
                                                <option value="Best Golf &amp; Fishing Patagonia">Best Golf &amp; Fishing Patagonia</option>
                                                <option value="Big Sky Anglers/Golden Stone Inn">Big Sky Anglers/Golden Stone Inn</option>
                                                <option value="Blue &amp; Green Outfitters">Blue &amp; Green Outfitters</option>
                                                <option value="Blue Bayou Lodge Of Guatemala">Blue Bayou Lodge Of Guatemala</option>
                                                <option value="Chavanga fishing outfitter">Chavanga fishing outfitter</option>
                                            </select>
                                            <button class="button-searchreset" type="button">Search</button>
                                            <button class="button-searchreset" type="button">Reset</button>
                                        </div>
                                    </div>
                                    <div class="flex-singleroom">
                                        <div class="room-image-discription">
                                            <div class="pro-img">
                                                <img src="{{ asset('assets/admin/images/com-vedio-3.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="room-text">
                                                <h4 class="text-blue">Single Room - Standard</h4>
                                                <p>User: Matthias Gassner (matt@braurup.at)</p>
                                                <p>Assigned Operation: Hotel & Fly Fishing <br> Braurup</p>
                                                <p>Type of Accommodation: Hotel</p>
                                                <button class="infobtn">+ more info</button>
                                            </div>
                                        </div>
                                        <div class="max-editarea">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p>Max</p>
                                                <p><i class="fa-solid fa-user"></i></p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{ route('add.room.type') }}" class="button-searchreset text-uppercase" type="button">Edit</a>
                                                <button class="button-searchreset text-uppercase" type="button">delete</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex-singleroom">
                                        <div class="room-image-discription">
                                            <div class="pro-img">
                                                <img src="{{ asset('assets/admin/images/com-vedio-3.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="room-text">
                                                <h4 class="text-blue">Single Room - Deluxe  <br> test</h4>
                                                <p>User: Wayne McGee ( atalodge.wayne@gmail.com)</p>
                                                <p>Assigned Operation: Alaska Trophy <br> Adventures Lodge</p>
                                                <p>Type of Accommodation: Lodge</p>
                                                <button class="infobtn">+ more info</button>
                                            </div>
                                        </div>
                                        <div class="max-editarea">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p>Max</p>
                                                <p><i class="fa-solid fa-user"></i></p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{ route('add.room.type') }}" class="button-searchreset text-uppercase" type="button">Edit</a>
                                                <button class="button-searchreset text-uppercase" type="button">delete</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </form>

    </main>
@endsection


@push('scripts')
    
@endpush
