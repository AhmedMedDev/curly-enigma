<div id="ct" class="">
    @for ($i = 1; $i < 6; $i++)
        <div class="invoice-0000{{ $i }}">
            <div class="content-section  animated animatedFadeInUp fadeInUp">
                @for ($j = 0; $j < 2; $j++)
                    <div class="row mb-5">
                        @for ($k = 0; $k < 2; $k++)
                            <div class="col-md-6">
                                <div class="infobox-3 w100">
                                    <div class="info-icon">
                                        <i data-feather="image"></i>
                                    </div>
                                    <h5 class="info-heading">Layout Package</h5>
                                    <p class="info-text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua.
                                    </p>
                                    <!-- Primary -->
                                    <button class="btn btn-danger    mb-2 mr-2">
                                        <i data-feather="image"></i>
                                        <span> Media</span>
                                    </button>

                                    <!-- Info -->
                                    <button class="btn btn-dark  mb-2 mr-2">
                                        <i data-feather="book-open"></i>
                                        <span> Book</span>
                                    </button>
                                </div>
                            </div>
                        @endfor
                    </div>
                @endfor
            </div>
        </div>
    @endfor
</div>
