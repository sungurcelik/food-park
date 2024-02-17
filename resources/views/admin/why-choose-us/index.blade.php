@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Why Choose Us</h1>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Accordion</h4>
            </div>
            <div class="card-body">
                <div id="accordion">
                    <div class="accordion">
                        <div class="accordion-header collapsed bg-primary text-light p-3" role="button" data-toggle="collapse"
                            data-target="#panel-body-1" aria-expanded="false">
                            <h4>Panel 1</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion" style="">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Top Title</label>
                                    <input name="why_choose_us_top_title" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Main Title</label>
                                    <input name="why_choose_us_main_title" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Title</label>
                                    <input name="why_choose_us_sub_title" type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>
    <section class="section">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Why Choose Us Titles</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">
                        Create New
                    </a>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>

    </section>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
