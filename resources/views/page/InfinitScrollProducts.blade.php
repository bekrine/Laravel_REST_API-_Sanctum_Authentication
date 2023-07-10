<div id="mydiv">

    @foreach ($products as $product)
    <div  style="border: 1px solid black;height:200px">{{$product->name}}</div>
    @endforeach
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
    // $(window).on('scroll', function () {
//     if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
//         // Make an AJAX request to fetch the next set of posts
//         console.log($(window).scrollTop(),'top')
        
//     }
// });
window.addEventListener("scroll", () => {
    console.log(window.document.body.scrollTop)
    // console.log(document.getElementById('mydiv').clientHeight,'height')
    // console.log(document.getElementById('mydiv').scrollHeight)
    // console.log(document.getElementById('mydiv').scrollTop)

});
</script>