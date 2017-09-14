{{--@TODO: fazer compoartilhamento--}}
<div class="share-bar d-flex">
    <a href="#" data-url="{{ urlencode(get_permalink()) }}" data-title="{{ urlencode(the_title()) }}" class="share-link link-fb"><i class="ion-social-facebook"></i></a>
    <a href="http://twitter.com/intent/tweet?status={{ urlencode(the_title()) }}+{{ urlencode(get_permalink()) }}" target="_blank" class="share-link link-tw"><i class="ion-social-twitter"></i></a>
    <a href="#" data-url="{{ urlencode(get_permalink()) }}" class="share-link link-gp"><i class="ion-social-googleplus"></i></a>
    <a href="whatsapp://send?text={{ get_permalink() }}" class="share-link link-wa hidden-sm-up"><i class="ion-social-whatsapp-outline"></i></a>
</div>
