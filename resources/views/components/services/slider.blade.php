@props(['services'])

<div class="relative w-full overflow-hidden">
    <div id="slider" class="flex transition-transform duration-500">
        @foreach($services as $service)
            <div class="p-4 slider-item">
                <div class="bg-white rounded-lg shadow-md overflow-hidden h-full">
                    <img src="{{ $service['image_url'] }}" alt="{{ $service['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2 text-[var(--text-color)]">{{ $service['title'] }}</h3>
                        <p>{{ $service['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Navigation Buttons --}}
    <button id="prev" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 rounded opacity-70 hover:opacity-100 transition z-10">‹</button>
    <button id="next" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 rounded opacity-70 hover:opacity-100 transition z-10">›</button>
</div>

<script>
    const slider = document.getElementById('slider');
    const slides = Array.from(slider.querySelectorAll('.slider-item'));
    let currentIndex = 0;

    function getSlidesPerView() {
        if (window.innerWidth >= 1024) return 3; // lg
        if (window.innerWidth >= 768) return 2;  // md
        return 1; // mobile
    }

    function updateSlider() {
        const slidesPerView = getSlidesPerView();
        const slideWidth = 100 / slidesPerView;
        slides.forEach(slide => slide.style.flex = `0 0 ${slideWidth}%`);
        const maxIndex = slides.length - slidesPerView;
        if(currentIndex > maxIndex) currentIndex = maxIndex < 0 ? 0 : maxIndex;
        slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
    }

    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = Math.max(currentIndex - 1, 0);
        updateSlider();
    });

    document.getElementById('next').addEventListener('click', () => {
        const slidesPerView = getSlidesPerView();
        const maxIndex = slides.length - slidesPerView;
        currentIndex = Math.min(currentIndex + 1, maxIndex);
        updateSlider();
    });

    window.addEventListener('resize', updateSlider);

    // Initialize slider
    updateSlider();
</script>
