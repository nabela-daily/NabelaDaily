<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Design landing page.">
    <meta name="author" content="Devcrud">
    <title>Nabela Daily</title>

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Creative Design main styles -->
	<link rel="stylesheet" href="assets/css/creative-design.css">
     <!-- Scripts -->
     <script src="{{ mix('js/app.js') }}" defer></script>
  
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    @include('layouts.partials.navbar');
  
    <!-- Page Header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <h6>Nabela</h6>
            <p>Modest Fashion Brand</p> 
            <button class="btn btn-outline-light">Buy Now</button> 
        </div>      
    </header><!-- End of Page Header -->    
    
    
    

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Creative Design js -->
    <script src="assets/js/creative-design.js"></script>
<div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

</body>
</html>
