<x-admin-layout>
    <x-slot name="title">
        <x-title :title="$title"></x-title>
    </x-slot>
    <x-slot name="header">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ trans('lang.widtdraw-request') }}</h1>
                    </div>
                    <!-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div> -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </x-slot>

    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</x-admin-layout>
