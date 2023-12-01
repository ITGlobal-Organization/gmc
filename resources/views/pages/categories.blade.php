@extends('layouts.layoutv2')

@section('content')

<div class="categories">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="middle mtb-60">
            <h1 class="text-center mb-40">Categories</h1>
    
        <div class="search-oh search-box1">
        <input type="image" class="oh-btn" img="" src="media/brn-search.png">
        <input type="text" id="searchInput" placeholder="Search" class="oh-input">
        <div class="clr"></div>
    </div>

            @php 
                $category = new App\Models\Category();
                $category->setLength(1000);
    $Categories = $category->getAll([],['id, name as text, slug'])->sortBy('text');
            @endphp

            <div class="row"> <!-- Start of row -->
                @foreach($Categories as $Category)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contact-list2">
                        <a href="{{ url('/your-path/' . $Category->slug) }}">{{ $Category->text }}</a>
                    </div>
                @endforeach
            </div> <!-- End of row -->
        </div>
    </div>
</div>
<div class="clr"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('keyup', function() {
            var searchTerm = searchInput.value.toLowerCase();
            var categories = document.querySelectorAll('.contact-list2');

            categories.forEach(function(category) {
                var text = category.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    category.style.display = '';
                } else {
                    category.style.display = 'none';
                }
            });
        });
    });
</script>

@endsection
