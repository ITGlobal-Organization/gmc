<div class="box-text">
                    @php 
                        $Description = strip_tags($description);
                        $Description = htmlspecialchars($Description, ENT_QUOTES, 'UTF-8');
                    
                    @endphp 
        {!! Description !!}
            
</div>