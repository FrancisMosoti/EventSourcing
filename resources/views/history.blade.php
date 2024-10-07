<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>History</title>
</head>
<body>
  
    <div class="mx-auto">
        <div class="card mx-auto mt-5" style="width: 30rem">
            <div class="card-body ">

                {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                    You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div> --}}



              <div class=" d-flex justify-content-evenly">
                <form method="post" action="{{route('order')}}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Order</button>
                  </form>
                  <form method="post" action="">
                    @csrf
                    <button type="submit" class="btn btn-success">Pay</button>
                  </form>
                  <form method="post" action="">
                    @csrf
                    <button type="submit" class="btn btn-info">Ship</button>
                  </form>
              </div>
            </div>
          </div>
    </div>
</body>
</html>