const modal = document.getElementById('modal');
    const modalImage = document.getElementById('modalImage');

    // 3 galerie po 4 zdjęcia
    const galleries = [
      ['chatajarka/dom Jarek.jpg', 'chatajarka/DSC_0189.jpg', 'chatajarka/DSC_0201.jpg',],
      ['sloneczne chaty/7.jpg', 'sloneczne chaty/8.jpg', 'sloneczne chaty/9.jpg', 'sloneczne chaty/10.jpg', 'sloneczne chaty/1.jpg', 'sloneczne chaty/2.jpg', 'sloneczne chaty/3.jpg', 'sloneczne chaty/4.jpg', 'sloneczne chaty/5.jpg', 'sloneczne chaty/6.jpg'],
      ['Sloneczna chata/2.jpg', 'Sloneczna chata/1.jpg', 'Sloneczna chata/3.jpg', 'Sloneczna chata/4.jpg']
    ];

    let currentGallery = 0;
    let currentIndex = 0;

    document.querySelectorAll('.gallery img').forEach((img) => {
      img.addEventListener('click', () => {
        currentGallery = parseInt(img.dataset.gallery);
        currentIndex = 0;
        modalImage.src = galleries[currentGallery][currentIndex];
        modal.style.display = 'flex';
      });
    });

    modalImage.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % galleries[currentGallery].length;
      modalImage.src = galleries[currentGallery][currentIndex];
    });

    modal.addEventListener('click', e => {
      if (e.target !== modalImage) modal.style.display = 'none';
    });

    window.addEventListener('keydown', e => {
      if (e.key === 'Escape') modal.style.display = 'none';
    });


       const contactPanel = document.getElementById('contactPanel');
    const closeBtn = document.getElementById('closeContact');

    function toggleContact() {
      contactPanel.classList.toggle('open');
    }

    closeBtn.addEventListener('click', () => {
      contactPanel.classList.remove('open');
    });

    window.addEventListener('keydown', e => {
      if (e.key === 'Escape') {
        contactPanel.classList.remove('open');
      }
    });