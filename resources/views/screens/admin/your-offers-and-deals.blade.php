@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
   <main>
        <form id="signUpForm" action="#!">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 col-12">
                            <div class="booking-chart-area">
                                <div class="payment-det-title">
                                    <h2>Your Deals</h2>
                                </div>
                                <div class="profile-data-area">
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Select Operation</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected disabled value="Select-operation">Select operation</option>
                                                <option value="++++++++">++++++++</option>
                                                <option value="abcd">abcd</option>
                                                <option value="Alaska-Trophy-Adventures-Lodge">Alaska Trophy Adventures Lodge</option>
                                                <option value="Andes-Drifters">Andes Drifters</option>
                                                <option value="Andes-Drifters-Parana-On-The-Fly">Andes Drifters - Parana On The Fly</option>
                                                <option value="Argentina-Hunt">Argentina Hunt</option>
                                                <option value="Argentina-Waters-Le-Fario-Lodge">Argentina Waters - Le Fario Lodge</option>
                                                <option value="Avalon-Cayo-Cruz">Avalon - Cayo Cruz</option>
                                                <option value="Avalon-Cayo-Largo">Avalon - Cayo Largo</option>
                                                <option value="Avalon-Isla-de-la-Juventud">Avalon - Isla de la Juventud</option>
                                                <option value="Avalon-Jardines-de-la-Reina">Avalon - Jardines de la Reina</option>
                                                <option value="Aylmer-Lake-Lodge">Aylmer Lake Lodge</option>
                                                <option value="Baja's-Fishing-Dream">Baja's Fishing Dream</option>
                                                <option value="Belousiha-River-Lodge">Belousiha-River-Lodge</option>
                                                <option value="Best-Golf-&-Fishing-Patagonia">Best Golf & Fishing Patagonia</option>
                                                <option value="Big-Sky-Anglers / Golden-Stone-Inn">Big Sky Anglers / Golden Stone Inn</option>
                                                <option value="Blue-&-Green-Outfitters">Blue & Green Outfitters</option>
                                                <option value="Blue-Bayou-Lodge-Of-Guatemala">Blue Bayou Lodge Of Guatemala</option>
                                                <option value="Chavanga-fishing-outfitter">Chavanga fishing outfitter</option>
                                                <option value="Chucao-Fishing-Lodges">Chucao Fishing Lodges</option>
                                                <option value="Cree-River-Lodge">Cree River Lodge</option>
                                                <option value="DON-JOAQUIN-RIVER-LODGE">DON JOAQUIN RIVER LODGE</option>
                                                <option value="Dorado Cua - Lodge">Dorado Cua - Lodge</option>
                                                <option value="Dorados-on-the-fly">Dorados on the fly</option>
                                                <option value="Dvorak's-Raft-&-Fishing-Expeditions">Dvorak's Raft & Fishing Expeditions</option>
                                                <option value="El-Encuentro-Fly-Fishing">El Encuentro Fly Fishing</option>
                                                <option value="El-Encuentro-Lodge">El Encuentro Lodge</option>
                                                <option value="Esquel-FlyFishing">Esquel FlyFishing</option>
                                                <option value="Estancia-Arroyo-Verde">Estancia Arroyo Verde</option>
                                                <option value="Fly-Fish-Guanaja">Fly Fish Guanaja</option>
                                                <option value="Fly-Fishing-District-Patagonia">Fly-Fishing-District-Patagonia</option>
                                                <option value="Fly-Fishing-in-Slovenia">Fly-Fishing-in-Slovenia</option>
                                                <option value="Fly-Fishing-in-Tuscany">Fly Fishing in Tuscany</option>
                                                <option value="Fly-Fishing-Italy">Fly Fishing Italy</option>
                                                <option value="fly-test">fly test</option>
                                                <option value="Flyfishing-The-run-Zapata-Peninsula">Flyfishing The run - Zapata Peninsula</option>
                                                <option value="FlyToFlyPatagonia">FlyToFlyPatagonia</option>
                                                <option value="Flywater-Guiding">Flywater Guiding</option>
                                                <option value="Fortress-Lake-Wilderness-Retreat">Fortress Lake Wilderness Retreat</option>
                                                <option value="Gander-River-Outfitters">Gander River Outfitters</option>
                                                <option value="Gaucho-Fly-Fishing-in-Patagonia">Gaucho Fly Fishing in Patagonia</option>
                                                <option value="Go-Fly-Fishing-Slovenia">Go Fly Fishing Slovenia</option>
                                                <option value="GoFish-Belize">GoFish Belize</option>
                                                <option value="Golden-Fly-Fishing">Golden Fly Fishing</option>
                                                <option value="Grandslam-Fishing-Lodge">Grandslam Fishing Lodge</option>
                                                <option value="GREAT-BONE-FISHING-Turks-and-Caicos">GREAT BONE FISHING Turks and Caicos</option>
                                                <option value="Great-Lake-Guiding">Great Lake Guiding</option>
                                                <option value="Guanacaste-Fly-Fishing">Guanacaste Fly Fishing</option>
                                                <option value="Guariba-Lodge">Guariba Lodge</option>
                                                <option value="Gunnison-River-Expeditions">Gunnison River Expeditions</option>
                                                <option value="HI-Tide-Fishing">HI Tide Fishing</option>
                                                <option value="Hook-Fishing-Experience">Hook Fishing Experience</option>
                                                <option value="Hotel-&-Fly-Fishing-Braurup">Hotel & Fly Fishing Braurup</option>
                                                <option value="Hotel-Gründlers">Hotel Gründlers</option>
                                                <option value="Kingfisher-Fishing-Malindi">Kingfisher Fishing Malindi</option>
                                                <option value="La-Posada-de-los-Farios - Chilean-Patagonia">La Posada de los Farios - Chilean Patagonia</option>
                                                <option value="LAGO-ROSARIO-LODGE">LAGO ROSARIO LODGE</option>
                                                <option value="Las-Pitras-Lodge">Las Pitras Lodge</option>
                                                <option value="Limay-River-Lodge">Limay River Lodge</option>
                                                <option value="Lustrik-Fly-Fishing-Slovenia">Lustrik Fly Fishing Slovenia</option>
                                                <option value="Maldives-Boat-Club-Pvt-Ltd">Maldives Boat Club Pvt Ltd</option>
                                                <option value="Mangrove-king-Fishing-Lodge">Mangrove king Fishing Lodge</option>
                                                <option value="Matapiojo-Lodge">Matapiojo Lodge</option>
                                                <option value="Melimoyu-Lodge">Melimoyu Lodge</option>
                                                <option value="new-op">new op</option>
                                                <option value="Northern-Lights-Lodge">Northern Lights Lodge</option>
                                                <option value="Outfitters-Patagonia">Outfitters Patagonia</option>
                                                <option value="Owen-River-Lodge">Owen River Lodge</option>
                                                <option value="Pachamama-Fly-Fishing">Pachamama Fly Fishing</option>
                                                <option value="Pachamama-Lodge">Pachamama Lodge</option>
                                                <option value="Palena-Fishing-Trip">Palena Fishing Trip</option>
                                                <option value="Patagonfly">Patagonfly</option>
                                                <option value="Patagonia-Nomads">Patagonia Nomads</option>
                                                <option value="Patagonia-Outfitters">Patagonia Outfitters</option>
                                                <option value="Patagonia-Outfitters - Alumine-River-Lodge">Patagonia Outfitters - Alumine River Lodge</option>
                                                <option value="Patagonia-River-Guides-North">Patagonia River Guides North</option>
                                                <option value="Pireco-Turismo-Fly-fishing">Pireco Turismo Fly fishing</option>
                                                <option value="Pucontours">Pucontours</option>
                                                <option value="Puma-Fishing-Ltda.">Puma Fishing Ltda.</option>
                                                <option value="Quemquemtreu-Lodge">Quemquemtreu Lodge</option>
                                                <option value="Remote-Waters,-LLC">Remote Waters, LLC</option>
                                                <option value="River-Plate-Anglers - Amazonia">River Plate Anglers - Amazonia</option>
                                                <option value="Riverland-Outfitters - Corcovado">Riverland Outfitters - Corcovado</option>
                                                <option value="Riverland-Outfitters - Estancia-Puerto-Buey">Riverland Outfitters - Estancia Puerto Buey</option>
                                                <option value="Robert-Ashton">Robert Ashton</option>
                                                <option value="Rod-&-Fly-Tasmania">Rod & Fly Tasmania</option>
                                                <option value="San-Huberto-Lodge">San Huberto Lodge</option>
                                                <option value="Shallow-Water-Guide-Service">Shallow Water Guide Service</option>
                                                <option value="Sightcast">Sightcast</option>
                                                <option value="Southern-Exposure">Southern Exposure</option>
                                                <option value="SouthernLoops-Fly-Fishing">SouthernLoops Fly Fishing</option>
                                                <option value="Talbots-Adventures-LTD">Talbots Adventures LTD</option>
                                                <option value="test">test</option>
                                                <option value="The-Best-of-Kamchatka">The Best of Kamchatka</option>
                                                <option value="The-Driftless-Fly-Fishing-Company-LLC">The Driftless Fly Fishing Company LLC</option>
                                                <option value="The-Zambezi-Grande-Fishing-Co.">The Zambezi Grande Fishing Co.</option>
                                                <option value="Tiamo-resort">Tiamo resort</option>
                                                <option value="Tipiliuke-Lodge">Tipiliuke Lodge</option>
                                                <option value="Tradition-Charters">Tradition Charters</option>
                                                <option value="Traful-River-Outfitters">Traful River Outfitters</option>
                                                <option value="Tranquility-Hill-Fishing-Lodge">Tranquility Hill Fishing Lodge</option>
                                                <option value="Ultimate-Rivers-Alaska">Ultimate Rivers Alaska</option>
                                                <option value="Ultimate-Rivers-Kamchatka">Ultimate Rivers Kamchatka</option>
                                                <option value="Water-Man-Adventures,-Outfitter">Water Man Adventures, Outfitter</option>
                                                <option value="Wedge-Hills-Lodge">Wedge Hills Lodge</option>
                                                <option value="www.flyfishinginpatagonia.com">www.flyfishinginpatagonia.com</option>
                                                <option value="www.flyfishnewzealand.co.nz-Lodge,-guide,-fresh-water">www.flyfishnewzealand.co.nz-Lodge, guide, fresh water</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Status of the offer</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected value="All">All</option>
                                                <option value="Waiting-Approval">Waiting Approval</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Published">Published</option>
                                                <option value="Removed">Removed</option>
                                                <option value="Not-published">Not published</option>
                                                <option value="Featured-offer">Featured offer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Offer code</h3>
                                            </div>
                                        </label>
                                        <div class="input-div">
                                            <input type="text" placeholder="" id="sad">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Sort by</h3>
                                            </div>
                                        </label>
                                        <div class="input-div d-grid">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected disabled value="">Select</option>
                                                <option value="Date-creation-increasing">Date creation increasing</option>
                                                <option value="Date-creation-descending">Date creation descending</option>
                                                <option value="Start-Date-increasing">Start Date increasing</option>
                                                <option value="Start-Date-descending">Start Date descending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Fish Species </h3>
                                            </div>
                                        </label>
                                        <div class="input-div d-grid">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected disabled value="Select-one">Select one</option>
                                                <option value="Freshwater">Freshwater</option>
                                                <option value="Saltwater">Saltwater</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Operation Type </h3>
                                            </div>
                                        </label>
                                        <div class="input-div d-grid">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected disabled value="Select one">Select one</option>
                                                <option value="Guide-Service">Guide Service</option>
                                                <option value="Lodging">Lodging</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Type of services </h3>
                                            </div>
                                        </label>
                                        <div class="input-div d-grid">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected disabled>Select one</option>
                                                <option value="Guide/Capt">Guide/Capt</option>
                                                <option value="Hotel">Hotel</option>
                                                <option value="Lodge">Lodge</option>
                                                <option value="Outfitter">Outfitter</option>
                                                <option value="Travel-Agency">Travel Agency</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius-last-child border-radius">
                                        <label for="">
                                            <div class="profile-title">
                                                <h3>Search by "Last update" </h3>
                                            </div>
                                        </label>
                                        <div class="input-div d-grid">
                                            <input type="date" id="" name="">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <div class="d-flex gap-3 align-items-center justify-content-start mt-4">
                                            <button class="button-searchreset" type="button">Search</button>
                                            <button class="button-searchreset" type="button">Reset</button>
                                        </div>
                                    </div>
                                    <div class="profile-detail w-100 mt-3 d-grid">
                                        <div class="offercode-data w-100 mb-3">
                                            <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap w-100 mb-4 pb-3 borderbottom-line">
                                                <h4 class="fly-rowhd">fly test - Offer Code 433</h4>
                                                <button class="button-searchreset" type="button">Published</button>
                                            </div>
                                            <div class="table-contect">
                                                <table>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset bg-grey">
                                                            Account
                                                        </td>
                                                        <td colspan="3" class="td-tableset">
                                                            <a href="#!" class="text-blue">agenciazyba@gmail.com</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset bg-grey">
                                                            Package Title
                                                        </td>
                                                        <td colspan="3" class="td-tableset"></td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset bg-grey">
                                                            Period
                                                        </td>
                                                        <td class="td-tableset bg-grey">
                                                            Start date
                                                        </td>
                                                        <td class="td-tableset bg-grey">
                                                            End date
                                                        </td>
                                                        <td class="td-tableset bg-grey ">
                                                            Nights / Fishing days
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset">
                                                            Open
                                                        </td>
                                                        <td class="td-tableset">
                                                            October 5, 2023
                                                        </td>
                                                        <td class="td-tableset">
                                                            October 31, 2023
                                                        </td>
                                                        <td class="td-tableset">
                                                            26/26
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset bg-grey">
                                                            Commission
                                                        </td>
                                                        <td colspan="2" class="td-tableset bg-grey">
                                                            Price from (per person) & Discount
                                                        </td>

                                                        <td class="td-tableset bg-grey">
                                                            Publish date
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset">
                                                            10%
                                                        </td>
                                                        <td colspan="2" class="td-tableset">
                                                            $274.56 (12%)
                                                        </td>

                                                        <td class="td-tableset">
                                                            October 04 2023 23:22
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td colspan="2" class="td-tableset bg-grey">
                                                            Number of Guests
                                                        </td>
                                                        <td colspan="2" class="td-tableset bg-grey">
                                                            Date Creation / Last update
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td colspan="2" class="td-tableset">
                                                            <ul>
                                                                <li>Double Room with one double bed-Standard</li>
                                                                <li class="text-red mb-3"><strong>Remember!</strong>: it's mandatory <strong>upload your main photo</strong> for your accomodation before publishing the Offer! Just <a href="#!" class="text-blue text-decoration-none"><strong>click here</strong></a> and upload the <a href="#!" class="text-red"><i>Featured image</i></a>.</li>
                                                                <li class="d-flex align-items-center justify-content-between gap-3 flex-wrap">Quantity: <span>1</span></li>
                                                                <li class="d-flex align-items-center justify-content-between gap-3 flex-wrap">Min Number of Guests: <span class="d-flex align-items-center gap-1">
                                                                        <div><i class="fa-solid fa-user"></i></div>
                                                                    </span></li>
                                                                <li class="d-flex align-items-center justify-content-between gap-3 flex-wrap">Max Number of Guests:
                                                                    <span class="d-flex align-items-center gap-1">
                                                                        <div><i class="fa-solid fa-user"></i></div>
                                                                        <div><i class="fa-solid fa-user"></i></div>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td colspan="2" class="td-tableset">
                                                            October 04 2023 23:19 /  <br> October 05 2023 00:19
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="d-flex justify-content-evenly align-items-center gap-3 my-4 flex-wrap">
                                                    <button class="button-searchreset text-uppercase" type="button">preview</button>
                                                    <button class="button-searchreset text-uppercase" type="button">edit</button>
                                                    <button class="button-searchreset text-uppercase" type="button">unpublish</button>
                                                    <button class="button-searchreset text-uppercase" type="button">clone</button>
                                                    <button class="button-searchreset text-uppercase bg-grey text-black" type="button">delete</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="offercode-data w-100 mb-3">
                                            <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap w-100 mb-4 pb-3 borderbottom-line">
                                                <h4 class="fly-rowhd">fly test - Offer code 432 - <span class="text-blue">is featured</span></h4>
                                                <button class="button-searchreset text-uppercase" type="button">waiting approval</button>
                                            </div>
                                            <div class="table-contect">
                                                <table>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset bg-grey">
                                                            Account
                                                        </td>
                                                        <td colspan="3" class="td-tableset">
                                                            <a href="#!" class="text-blue">agenciazyba@gmail.com</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset bg-grey">
                                                            Package Title
                                                        </td>
                                                        <td colspan="3" class="td-tableset">fly test package</td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset bg-grey">
                                                            Period
                                                        </td>
                                                        <td class="td-tableset bg-grey">
                                                            Start date
                                                        </td>
                                                        <td class="td-tableset bg-grey">
                                                            End date
                                                        </td>
                                                        <td class="td-tableset bg-grey ">
                                                            Nights / Fishing days
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset">
                                                            Open
                                                        </td>
                                                        <td class="td-tableset">
                                                        September 29, 2023
                                                        </td>
                                                        <td class="td-tableset">
                                                        October 31, 2023
                                                        </td>
                                                        <td class="td-tableset">
                                                        32/32
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset bg-grey">
                                                            Commission
                                                        </td>
                                                        <td colspan="2" class="td-tableset bg-grey">
                                                            Price from (per person) & Discount
                                                        </td>

                                                        <td class="td-tableset bg-grey">
                                                            Publish date
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td class="td-tableset">
                                                            10%
                                                        </td>
                                                        <td colspan="2" class="td-tableset">
                                                            $274.56 (12%)
                                                        </td>

                                                        <td class="td-tableset">
                                                        Not published yet
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td colspan="2" class="td-tableset bg-grey">
                                                            Number of Guests
                                                        </td>
                                                        <td colspan="2" class="td-tableset bg-grey">
                                                            Date Creation / Last update
                                                        </td>
                                                    </tr>
                                                    <tr class="tablerow">
                                                        <td colspan="2" class="td-tableset">
                                                            <ul>
                                                                <li>Double Room with one double bed-Standard</li>
                                                                <li class="text-red mb-3"><strong>Remember!</strong>: it's mandatory <strong>upload your main photo</strong> for your accomodation before publishing the Offer! Just <a href="#!" class="text-blue text-decoration-none"><strong>click here</strong></a> and upload the <a href="#!" class="text-red"><i>Featured image</i></a>.</li>
                                                                <li class="d-flex align-items-center justify-content-between gap-3 flex-wrap">Quantity: <span>1</span></li>
                                                                <li class="d-flex align-items-center justify-content-between gap-3 flex-wrap">Min Number of Guests: <span class="d-flex align-items-center gap-1">
                                                                        <div><i class="fa-solid fa-user"></i></div>
                                                                    </span></li>
                                                                <li class="d-flex align-items-center justify-content-between gap-3 flex-wrap">Max Number of Guests:
                                                                    <span class="d-flex align-items-center gap-1">
                                                                        <div><i class="fa-solid fa-user"></i></div>
                                                                        <div><i class="fa-solid fa-user"></i></div>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td colspan="2" class="td-tableset">
                                                        September 28 2023 23:24 / <br>September 28 2023 23:11
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="d-flex justify-content-evenly align-items-center gap-3 my-4 flex-wrap">
                                                    <button class="button-searchreset text-uppercase" type="button">preview</button>
                                                    <button class="button-searchreset text-uppercase" type="button">edit</button>
                                                    <button class="button-searchreset text-uppercase" type="button">publish</button>
                                                    <button class="button-searchreset text-uppercase" type="button">reject</button>
                                                    <button class="button-searchreset text-uppercase" type="button">clone</button>
                                                    <button class="button-searchreset text-uppercase bg-grey text-black" type="button">delete</button>
                                                </div>
                                            </div>
                                        </div>
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
    <!--<script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>-->
    <script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.myTextarea'
        });

        $('.googlemap-link').click(function() {
            $('.map-set').addClass('active')
        })
        document.getElementById('fresh-id').addEventListener('change', function() {
            var freshActiveDiv = document.querySelector('.fresh-active');
            if (this.checked) {
                freshActiveDiv.classList.add('active');
            } else {
                freshActiveDiv.classList.remove('active');
            }
        });
        document.getElementById('salt-id').addEventListener('change', function() {
            var freshActiveDiv = document.querySelector('.saltwater-active');
            if (this.checked) {
                freshActiveDiv.classList.add('active');
            } else {
                freshActiveDiv.classList.remove('active');
            }
        });
    </script>
    <script>
        // let noimage = "./assets/images/update-profile.png";
        let noimage = "{{ asset('assets/admin/images/update-profile.png') }}";

        function readURL(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }
    </script>
    <!-- <script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("step");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("step");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("signUpForm").submit();
                return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("step");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("stepIndicator");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script> -->
    <script>
        const imageInput = document.querySelector('#myFile-profile');
        const showImg = document.querySelector('#step-profile');
        imageInput.addEventListener('change', function(event) {
            if (event.target.files && event.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    showImg.src = e.target.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const multiImagesInput = document.getElementById('galleryimages');
            const imagesBoxes = document.querySelector('.images-boxes');

            multiImagesInput.addEventListener('change', function() {
                const files = this.files;

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const imgBox = document.createElement('div');
                        imgBox.className = 'img-box';
                        const removeBtn = document.createElement('button');
                        removeBtn.className = 'remove-img';
                        removeBtn.innerText = 'X';
                        const image = document.createElement('img');
                        image.src = event.target.result;
                        image.alt = 'Uploaded Image';
                        removeBtn.addEventListener('click', function() {
                            imagesBoxes.removeChild(imgBox);
                        });
                        imgBox.appendChild(removeBtn);
                        imgBox.appendChild(image);
                        imagesBoxes.appendChild(imgBox);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush
