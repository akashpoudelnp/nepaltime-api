@extends('layouts.master')
@section('title', 'Nepal Time API')
@push('seo')
    <meta name="title" content="Nepali Date Converter Online | Convert Date Online">
    <meta name="description"
        content=" Convert BS to AD online.Convert AD to BS online. Convert nepali date to english AD format. You can easily convert nepali date to english AD and english AD to nepali Bikram Sambat.">
@endpush

@section('content')
    <section class="py-5 mt-5">
        <div class="container py-5">
            <!-- Today Section -->
            <div class="row mb-3">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2 fs-4">Today is</p>
                    <h2 class="fw-bold ">
                        {{ $today['M'] }}
                        {{ $today['d'] }}
                        , {{ $today['y'] }}
                    </h2>
                </div>
            </div>
            <!-- Convert Date Section -->
            <div class="  d-flex justify-content-center gap-2">
                <div class="form-check">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Convert BS to AD
                        <input id="" class="form-check-input" type="radio" name="choice" value="bs2ad" checked>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="flexRadioDefault1">
                        <input id="changer" class="form-check-input" type="radio" name="choice" value="ad2bs">
                        Convert AD to BS
                    </label>
                </div>
            </div>
            <div class="row  d-flex justify-content-center">
                <!-- BS to AD -->
                <div id="bs2ad" class="col-6 p-4">
                    <h3 class="fw-bold fs-5 text-center pb-3">Convert BS to AD</h3>
                    <form id="bs2adform" method="GET" action="api/v1/convert/bstoad">
                        <div class="row gap-1 mb-3 ">
                            <select name="month" class=" form-select  ">
                                @for ($i = 0; $i < count($months_ne); $i++)
                                    <option @selected($i + 1 == $today['m']) value="{{ $i + 1 }}">{{ $months_ne[$i] }}
                                    </option>
                                @endfor
                            </select>
                            <select name="day" class=" form-select">
                                @for ($i = 1; $i <= 32; $i++)
                                    <option @selected($today['d'] == $i) value="{{ $i }}">{{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <select name="year" class=" form-select">
                                @for ($i = 2000; $i < 2086; $i++)
                                    <option @selected($today['y'] == $i) value="{{ $i }}">{{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="d-flex justify-content-center"><button name="for" value="bs2ad"
                                class="btn btn-primary shadow  " type="submit">Convert </button></div>
                    </form>
                </div>
                <div id="ad2bs" class="col-6 p-4" hidden>
                    <h3 class="fw-bold fs-5 text-center pb-3">Convert AD to BS</h3>
                    <form id="ad2bsform" class="" method="GET" action="api/v1/convert/adtobs">
                        <div class="row gap-1 mb-3 ">
                            <select name="month" class=" form-select  ">
                                @for ($i = 0; $i < count($months_en); $i++)
                                    <option @selected($i + 1 == $today_en['m']) value="{{ $i + 1 }}">{{ $months_en[$i] }}
                                    </option>
                                @endfor
                            </select>
                            <select name="day" class=" form-select">
                                @for ($i = 1; $i < 32; $i++)
                                    <option @selected($today_en['d'] == $i) value="{{ $i }}">{{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <select name="year" class=" form-select">
                                @for ($i = 1950; $i < 2086; $i++)
                                    <option @selected($today_en['y'] == $i) value="{{ $i }}">{{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="d-flex justify-content-center"><button name="for" value="ad2bs"
                                class="btn btn-primary shadow  " type="submit">Convert </button></div>
                    </form>
                </div>
                {{-- loading --}}
                <div id="loading" class="text-center" hidden>
                    <div class="spinner-border" style="color:teal;" role="status">
                    </div>
                </div>
                <div id="result" class="border" hidden>
                    <p class="text-primary text-center mt-4">Converted Date</p>
                    <h3 class="text-center  mb-2" id="result_value"></h3>
                </div>
            </div>

        </div>
    </section>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('.form-check-input').on('change', function() {
            var val = $(this).val();
            if (val == 'bs2ad') {
                $('#bs2ad').removeAttr('hidden');
                $('#ad2bs').attr('hidden', '');
                $('#result').attr('hidden', '');
                $('#result_value').text("");

            } else {
                $('#bs2ad').attr('hidden', '');
                $('#ad2bs').removeAttr('hidden');
                $('#result').attr('hidden', '');
                $('#result_value').text("");
            }
        });
    </script>
    <script>
        $("form").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            var actionUrl = form.attr('action');
            $.ajax({
                type: "GET",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    var json = JSON.parse(data);
                    $("#loading").attr('hidden', '');
                    $('#result').removeAttr('hidden');
                    document.getElementById('result_value').innerHTML = json.M + ' ' + json.d + ',' +
                        json.y;
                },
                error: function(error) {
                    $("#loading").attr('hidden', '');
                    console.log('An Error has Occured');
                }
            });
        });

        $(document).ajaxStart(function() {
            $('#loading').removeAttr('hidden');
        });
    </script>
@endpush
