@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <form action="">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9 col-12">
                            <div class="booking-chart-area">
                                <div class="chrt-hd-area">
                                    <div class="profile-pg-hd">
                                        <h3>Account Information</h3>
                                        <p>Fields mark with an asterisk(*) are required</p>
                                    </div>
                                </div>
                                <div class="profile-data-area">
                                    <div class="profile-detail">
                                        <label for="sad3">
                                            <div class="profile-title">
                                                <h3>Name of Operation *</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad3">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="sad4">
                                            <div class="profile-title">
                                                <h3>Phone *</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="number" placeholder="" id="sad4">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="sad4">
                                            <div class="profile-title">
                                                <h3>Type Of Service *</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="number" placeholder="" id="sad4">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="sad4">
                                            <div class="profile-title">
                                                <h3>Primary Contact*</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="number" placeholder="" id="sad4">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="sad4">
                                            <div class="profile-title">
                                                <h3>Backup Contact *</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="number" placeholder="" id="sad4">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="sad6">
                                            <div class="profile-title">
                                                <h3>Website or Social Media link</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad6">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="sad7">
                                            <div class="profile-title">
                                                <h3>Skype Account</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad7">
                                        </div>
                                    </div>
                                    <div class="profile-detail">
                                        <label for="sad8">
                                            <div class="profile-title">
                                                <h3>WhatsApp</h3>
                                            </div>
                                        </label>
                                        <div class="file-de-in">
                                            <input type="text" placeholder="" id="sad8">
                                        </div>
                                    </div>
                                    <div class="profile-detail border-radius-last-child social-child">

                                        <div class="">
                                            <label for="sad9">
                                                <div class="profile-title">
                                                    <h3>Social Links</h3>
                                                </div>
                                            </label>
                                        </div>
                                        <div style="width: 100%">
                                            <div class="main-social-area">
                                                <div class="file-de-in social-area">
                                                    <div>
                                                        <select name="" id="" class="select-social-type">
                                                            <option value="Facebook">Facebook</option>
                                                            <option value="Linkedin">Linkedin</option>
                                                            <option value="Twitter">Twitter</option>
                                                            <option value="Instagram">Instagram</option>
                                                            <option value="YouTube">YouTube</option>
                                                            <option value="Telegram">Telegram</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <input type="text" placeholder="Enter Link" id="sad9"
                                                            class="social-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-update-button justify-content-start">
                                                <button type="button" class="add-link-btn">Add Link</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit-profile-button">
                                        <button>Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="image-update-area">
                                <div class="profile-update-area">
                                    <div class="profile-box">
                                        <img id="img-preview" src="{{ asset('assets/admin/images/profile-update.png') }}" alt="">
                                        <p>Change profile picture</p>
                                    </div>
                                    <div class="img-update-btn">
                                        <input id="upload-profile" type="file" accept="image/*"
                                            onchange="readURL(this)" />
                                        <label for="upload-profile">Upload a file</label>
                                    </div>
                                    <div class="update-pass-hd ">
                                        <h2>Password Reset</h2>
                                    </div>
                                    <div class="sign-inputs">
                                        <div class="">
                                            <div class="prof-chng-pass-p">
                                                <input type="password" class="chng-pass-input" id="sda"
                                                    placeholder="New Password*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sign-inputs">
                                        <div class="">
                                            <div class="prof-chng-pass-p">
                                                <input type="password" class="chng-pass-input" id="dsa"
                                                    placeholder="Confirm Password*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-update-button">
                                        <button>Update</button>
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
    <script>
        // let noimage = "./assets/images/update-profile.png";
        let noimage = "{{ asset('assets/admin/images/update-profile.png') }}";

        function readURL(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#img-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }
        const socialArea = document.querySelector(".social-area");
        const addlinkbtn = document.querySelector(".add-link-btn");
        const mainsocialarea = document.querySelector(".main-social-area");
        addlinkbtn.addEventListener("click", () => {
            const clonedSocialArea = socialArea.cloneNode(true);
            const removeBtn = document.createElement("button");
            removeBtn.innerHTML = `<i class="fa-solid fa-trash"></i>`;
            removeBtn.classList.add("remove-btn");
            clonedSocialArea.appendChild(removeBtn);
            mainsocialarea.appendChild(clonedSocialArea);
            removeBtn.addEventListener("click", () => {
                clonedSocialArea.remove();
            });
        });


    </script>
@endpush
