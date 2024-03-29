@props(['post' => $post])

<div class="mb-4">
    <a href="{{route('users.posts', $post->user)}}" class="font-bold">{{$post->user->name}}</a> <span class="text-gray-600-text-sm">{{$post->created_at->diffForHumans()}}</span>
    
    <p class="mb-2">{{$post->body}}</p>  

     @can('delete',$post)
         <form action="{{route('posts.destroy',$post)}}" method="post">
             @csrf
             @method('delete')
         <button type="submit" class="text-blue-500">Delete</button>
     </form>
     @endcan

    <div class="flex items-center">
     @auth
         @if (!$post->likedby(auth()->user()))
             <form action="{{route('posts.likes',$post->id)}}" method="post" class="mr-1">
             @csrf
             <button type="submit" class="text-blue-500">Like</button>
             </form>
         @else
             <form action="{{route('posts.likes',$post->id)}}" method="post" class="mr-1">
             @csrf
             @method('delete')
             <button type="submit" class="text-blue-500">Unlike</button>
             </form>
         @endif
     <span>{{$post->likes->count()}} {{ Str::plural('Like', $post->likes->count())}}</span>
     @endauth 
     </div>
 </div>
