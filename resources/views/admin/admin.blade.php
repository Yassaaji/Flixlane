@extends('layout.side')
@section('side')
<style>
     html {
            position: relative;
            min-height: 100%;
        }

        body {
            overflow: hidden;
            background-color: #333333;
        }

        .content-wrapper {
            overflow: hidden;
            width: 100%;
            height: 100vh;
            max-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 20px;
            margin-top: 40px;
        }

        .scroll-to-top {
            position: fixed;
            right: 15px;
            bottom: 3px;
            display: none;
            width: 50px;
            height: 50px;
            text-align: center;
            color: white;
            background: rgba(52, 58, 64, 0.5);
            line-height: 45px;
        }

        .scroll-to-top:focus,
        .scroll-to-top:hover {
            color: white;
        }

        .scroll-to-top:hover {
            background: #343a40;
        }

        .scroll-to-top i {
            font-weight: 800;
        }

        .smaller {
            font-size: 0.7rem;
        }

        .o-hidden {
            overflow: hidden !important;
        }

        .z-0 {
            z-index: 0;
        }

        .z-1 {
            z-index: 1;
        }





        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: -25px;
            right: -25px;
            font-size: 5rem;
            -webkit-transform: rotate(15deg);
            -ms-transform: rotate(15deg);
            transform: rotate(15deg);
        }

        @media (min-width: 576px) {
            .card-columns {
                column-count: 1;
            }
        }

        @media (min-width: 768px) {
            .card-columns {
                column-count: 2;
            }
        }

        @media (min-width: 1200px) {
            .card-columns {
                column-count: 2;
            }
        }


        /* CSS untuk menempatkan tombol di tengah */
        .btnnn {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        /* CSS untuk tombol */
        button {
            margin: 10px;
            padding: 2px 4px;
            font-size: 16px;

        }

        .p{
            background-color: #343a40;
            overflow: hidden;
           padding-bottom: 20px;
           text-align: start ;
           color: #ffffff;
           width: 100%;
           margin: 0

        }
        .col-xl-3{

        }
</style>

<div class="content-wrapper ">
    <div class="container-fluid mr-5 ml-5">
        <!-- Icon Cards-->
        <div class="row " >
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5">Jumlah Penonton</div>
                        <div class="mr-5"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">Jumlah pengguna</div>
                        <div class="mr-5 mt-2 ml-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">Jumlah FIlm</div>
                        <div class="mr-5"></div>
                    </div>
                </div>
            </div>


@endsection

