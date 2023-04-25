<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($cursos as $curso)
        <x-course-card :curso="$curso"/>
    @endforeach
</div>
