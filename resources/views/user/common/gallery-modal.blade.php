<div id="myModal" class="modal">

    <div class="modal-contents">
        <span class="modal-close" >&times;</span>
        <button class="add-image-btn">Add Image</button>
        <!-- Image gallery -->
        <div class="gallery">
            <!-- Replace src attribute with your project image URLs -->
            @foreach ($galleryImages as $galleryImage)
            <div class="gallery-item">
                <img src="{{isset($galleryImage->image_url) ? $galleryImage->image_url : asset('/media/image-not-found.png')}}" alt="Profile Picture"
                    data-id="{{isset($galleryImage->id) ? $galleryImage->id : ""}}" class="gallery-img">
            </div>
            @endforeach

            <!-- Add more gallery items for additional images -->
        </div>
    </div>
</div>
