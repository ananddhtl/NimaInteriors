@extends('welcome')
@section('title', 'change password :: Nimainteriors.com')

@section('content')

    <section class="page profile">
        <div class="container-fluid customer-container">
            <div class="row-height c-account">
                <div class="row">
                    @include('frontend.customer.account.sidebar')
                    <div class="col-lg-10 right-form show-d">
                        <div class="profile-setting">
                            <div class="card">
                                <div class="card-header" id="card-header">Profile Settings</div>
                                <div class="card-body">


                                    <form id="addressForm" method="POST" action="{{ route('profile.update') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" id="name" name="name" value="{{ auth()->user()->fullname }}" required>
                                            </div>
                                            <div class="col-lg-12 form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" required>
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="btn btn-secondary" type="submit">Save Address</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        </div>
    </section>

@endsection

{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll('.left-bar ul li');
        const sections = document.querySelectorAll('.card-body > div');
        const cardHeader = document.getElementById('card-header');
    
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                const contentId = this.getAttribute('data-content');
                const headerText = this.getAttribute('data-header');
    
                sections.forEach(section => {
                    if (section.id === contentId) {
                        section.classList.remove('hidden');
                    } else {
                        section.classList.add('hidden');
                    }
                });
    
                menuItems.forEach(menuItem => {
                    menuItem.classList.remove('active');
                });
                this.classList.add('active');
    
                // Update the card header
                cardHeader.textContent = headerText;
            });
        });
    
        const defaultContentId = document.querySelector('.left-bar li.active').getAttribute('data-content');
        document.getElementById(defaultContentId).classList.remove('hidden');
    
        const defaultHeaderText = document.querySelector('.left-bar li.active').getAttribute('data-header');
        cardHeader.textContent = defaultHeaderText;
    });
    </script>
     --}}