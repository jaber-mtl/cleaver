<!DOCTYPE html>
<html lang="en-US">
@include('partials.head')
<body class="{{ $bodyClasses ?? '' }}">
@foreach($sections as $section)
                <section class="text-gray-700 leading-relaxed mb-12" id="{{ $section->slug }}">
                    <h2 class="block text-2xl font-semibold mb-2 text-gray-900">{{ $section->title }}</h2>
                    @foreach($section->contents as $content)
                        @if($content->type === 'code')
                            <div class="container bg-gray-800 rounded-none md:rounded-lg mx-auto my-6 py-6 px-6 md:px-12 shadow-xl">
                                <pre class="text-white whitespace-pre-wrap">{!! $content->text !!}</pre>
                            </div>
                        @else
                            <p class="my-6">{!! $content->text !!}</p>
                        @endif
                    @endforeach
                </section>
            @endforeach
@include('partials.footer')
</body>
</html>
