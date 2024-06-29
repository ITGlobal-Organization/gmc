<div class="box-text">
                    @php 
                        //$Description = strip_tags($Description);
                        $Description = preg_replace('/<[^>]+>/', '', $Description);
                        //$Description = htmlspecialchars($Description, ENT_QUOTES, 'UTF-8');
                    
                    @endphp 
        {{ $Description }}
            
</div>