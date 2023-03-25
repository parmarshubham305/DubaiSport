@extends('frontend.layouts.layout')
@section('content')
<div class="spacing-y">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">Products <span class="text-primary">List</span></h2>
        </div>
        <div class="row">
            <livewire:front.filter-component />
            <div class="col-md-9 product-list">
                <livewire:front.product-render :categoryId="$categoryId"/>
            </div>
        </div>
    </div>
</div>
@stop