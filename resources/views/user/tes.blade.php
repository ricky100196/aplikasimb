@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">Ujian Minat dan Bakat</div>
                <div class="card-body">
                    <h2>SOAL Test PAPI </h2>
                    <form>
                            @php
							      $i = 0
							  @endphp
                            @foreach ($soalpapi as $papi)
                            {{  ++$i }}
                            <div class="form-group">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="optionsRadios" id="options1" value="a">
                                  {{ $papi->question1 }}
                                </label>
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="options2" value="a">
                                    {{ $papi->question2 }}
                                  </label>
                                </div>
                                @endforeach
                              </div>

                            </div>
                      </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection
@push('scripts')

@endpush
