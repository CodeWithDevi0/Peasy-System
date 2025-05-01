
  let currentIndex = 0;
  const slides = document.querySelector('.slides');
  const dotsContainer = document.querySelector('.dots');
  const totalSlides = document.querySelectorAll('.slide').length;

  // Create Dots
  for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement('span');
    dot.addEventListener('click', () => moveToSlide(i));
    dotsContainer.appendChild(dot);
  }

  function moveToSlide(index) {
    slides.style.transform = `translateX(-${index * 100}%)`;
    currentIndex = index;
    updateDots();
  }

  function updateDots() {
    const dots = document.querySelectorAll('.dots span');
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentIndex].classList.add('active');
  }

  // Auto Slide Every 3 Seconds
  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    moveToSlide(currentIndex);
  }, 3000);

  // Initial Setup
  moveToSlide(0);
