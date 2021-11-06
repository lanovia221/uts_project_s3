<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>

<div>
  
    <ul class="nav nav-tabs shadow-sm p-3 mb-5 rounded bg-info d-flex justify-content-center"  >
      <img src="{{ asset('image/bee.png') }}" class="imageNav rounded start-end"  alt="Responsive image" width= "3%" height="auto">
        <li class="nav-item">
          <a class="nav-link @if($title == "Home"){{ "active" }} @endif" href="/" >
           Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($title == "ListYoutube"){{ "active" }} @endif" href="/ListYoutube">
            List Youtuber</a>
        </li>

        <li class="nav-item">
          <a class="nav-link @if($title == "ShowContent"){{ "active" }} @endif" href="/ShowContent">
            Show Content</a>
        </li>
      </ul>
</div>





