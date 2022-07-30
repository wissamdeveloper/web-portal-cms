<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <title>{{config('app.name')}} - @yield('title')</title>

    <!-- font awesome cdn link  -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"  type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/flag-icon-css/css/flag-icon.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('vendor/my-mpt/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('vendor/my-mpt/jsSocials/jssocials.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/my-mpt/jsSocials/jssocials-theme-classic.css') }}">


</head>
<body>

<!-- header section starts  -->

<!-- header section starts  -->

@include('layouts._mpt._navbar')
<!-- header section ends -->


<!-- home section starts  -->
<main>
    @yield('content')

</main>

<!-- footer section starts  -

<section class="footer">

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>
    <div class="box-container">

        <div class="box">
            <h3>Navigation rapide</h3>
            <a href="#"> Espace presse</a>
            <a href="#"> Médiatheque</a>
            <a href="#">Téléchargement</a>
            <a href="#"> FAQs</a>
            <a href="#"> Liens utiles</a>
        </div>


        <div class="box">
            <h3>Divers</h3>
            <a href="#"> Espace presse</a>
            <a href="#"> Médiatheque</a>
            <a href="#">Téléchargement</a>
            <a href="#"> FAQs</a>
            <a href="#"> Liens utiles</a>
        </div>

        <div class="box">
            <h3>A propos du site</h3>
            <p>
                 Plan du site
            </p>
            <p>
                 Informations technique
            </p>
            <p>
                 contacter nous
            </p>
        </div>
 </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>



    <div class="credit">created by <span>mr. web designer</span> | all rights reserved</div>

</section>

- footer section ends -->
@include('layouts._mpt._footer')











<!-- custom js file link  -->
<script src="{{asset('vendor/my-mpt/js/script.js')}}"></script>
<script src="{{asset('vendor/my-mpt/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('vendor/my-mpt/js/printThis.js')}}"></script>

<script>
    $('#print').click(function(){
        $('.card').printThis({
            debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "{{ asset('vendor/my-mpt/css/style.css') }}",                // path to additional css file - use an array [] for multiple
        pageTitle: "",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: null,               // prefix to html
        footer: null,               // postfix to html
        base: false,                // preserve the BASE tag or accept a string for the URL
        formValues: true,           // preserve input/form values
        canvas: false,              // copy canvas content
        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null,     // callback function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null            // function called before iframe is removed
        });
    })
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script>
function htmltopdf(){
var element = document.getElementById("element")
html2pdf(element, {
  margin:       10,
  filename:     '{{ $post->title }}.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 2, logging: true, dpi: 192, letterRendering: true },
  jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
});
}
</script>


<script src="https://kit.fontawesome.com/7368c40b21.js" crossorigin="anonymous"></script>
<script src=" {{ asset('vendor/my-mpt/jsSocials/jssocials.js') }}"></script>
{{-- <script src=" {{ asset('vendor/my-mpt/js/pdf.js') }}"></script> --}}

<script>
    $("#share").jsSocials({
        url:"https://mpt.test/post/{{ $post->slug }}",
        showLabel:false,
        shares:["twitter","linkedin","googleplus","facebook"],
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
