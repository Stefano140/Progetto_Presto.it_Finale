<x-layout>
<div class="container-fluid p-5 bg-gradient bg-success shadow mb-5">
    <div class="row">
        <div class="col-12 text-light p-5">
            <h1 class="display-2">{{$announcement_to_check ? 'ecco l\'annuncio da rivisionare' : 'non ci sono annunci'}}</h1>
        </div>
    </div>
</div>

<div>
    @if($announcement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="ShowCarousel" class="carousel slide" data-bs-ride="carousel">
                    @if ($announcement_to_check-> images)
                    <div class="carousel-inner">
                        @foreach ($announcement_to_check->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 roundend" alt="...">
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/202" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/203" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>





    </div>
    <h5 class="card-title">{{$announcement_to_check->title}}</h5>
    <p class="card-text">Descrizione: {{$announcement_to_check->description}}</p>
    <p class="card-text">Prezzo :{{$announcement_to_check->price}}€</p>


</div>
<div class="row">
    <div class="col-12">
        <form action="{{route('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
            @csrf
            @method('PATCH')
           <button type="submit" class="btn btn-primary">
            Accetta
           </button>
        </form>
    </div>
    <div class="col-12">
        <form action="{{route('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
            @csrf
            @method('PATCH')
           <button type="submit" class="btn btn-primary">
           Rifiuta
           </button>
        </form>
    </div>
</div>
@endif












</x-layout>