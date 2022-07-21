@extends('layouts.master')
@section('title', 'Nepal Time API')
@section('content')
    <section class="py-5 mt-5">
        <div class="container py-5">
            <!-- Today Section -->
            <div class="row mb-3">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2 fs-4">Today is</p>
                    <h2 class="fw-bold ">
                        {{ $today['m'] }}
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
                                <option value="1">वैशाख</option>
                                <option value="2">जेठ</option>
                                <option value="3">असार</option>
                                <option value="4">श्रावण</option>
                                <option value="5">भाद्र</option>
                                <option value="6">असोज</option>
                                <option value="7">कार्तिक</option>
                                <option value="8">मंसिर</option>
                                <option value="9">पुष</option>
                                <option value="10">माघ</option>
                                <option value="11">फागुन</option>
                                <option value="12">चैत</option>
                            </select>
                            <select name="day" class=" form-select">
                                @for ($i = 1; $i < 32; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <select name="year" class=" form-select">
                                @for ($i = 2000; $i < 2086; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="d-flex justify-content-center"><button class="btn btn-primary shadow  "
                                type="submit">Convert </button></div>
                    </form>
                    <div id="result_bs2ad" hidden>
                        <p class="text-primary text-center mt-4">Converted Date</p>
                        <h3 class="text-center  mb-2" id="value_bs2ad"></h3>
                    </div>
                </div>
                <div id="ad2bs" class="col-6 p-4" hidden>
                    <h3 class="fw-bold fs-5 text-center pb-3">Convert AD to BS</h3>
                    <form id="ad2bsform" class="" method="GET" action="api/v1/convert/adtobs">
                        <div class="row gap-1 mb-3 ">
                            <select name="month" class=" form-select  ">
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7" selected="">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <select name="day" class=" form-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected="">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                            </select>
                            <select name="year" class=" form-select">
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center"><button class="btn btn-primary shadow  "
                                type="submit">Convert </button></div>
                    </form>
                    <div id="result_ad2bs" hidden>
                        <p class="text-primary text-center mt-4">Converted Date</p>
                        <h3 class="text-center  mb-2" id="value_ad2bs"></h3>
                    </div>
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
                $('#result_ad2bs').attr('hidden', '');
                $('#value_ad2bs').text("");

            } else {
                $('#bs2ad').attr('hidden', '');
                $('#ad2bs').removeAttr('hidden');
                $('#result_bs2ad').attr('hidden', '');
                $('#value_bs2ad').text("");
            }
        });
    </script>
    <script>
        $("#ad2bsform").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            var actionUrl = form.attr('action');
            $.ajax({
                type: "GET",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    var json = JSON.parse(data);
                    $('#result_ad2bs').removeAttr('hidden');
                    document.getElementById('value_ad2bs').innerHTML = json.M + ' ' + json.d + ',' +
                        json.y;
                },
                error: function(error) {
                    console.log('An Error has Occured');
                }
            });

        });
        $("#bs2adform").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            var actionUrl = form.attr('action');
            $.ajax({
                type: "GET",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    var json = JSON.parse(data);
                    $('#result_bs2ad').removeAttr('hidden');
                    document.getElementById('value_bs2ad').innerHTML = json.M + ' ' + json.d + ',' +
                        json.y;
                },
                error: function(error) {
                    console.log('An Error has Occured');
                }
            });

        });

        $(document).ajaxStart(function() {
            $("#sendButton").hide();
            $("#loadingButton").show();
        });
    </script>
@endpush
