import './bootstrap';
import Alpine from 'alpinejs';
import AOS from 'aos';
import Swiper from 'swiper';
import { Autoplay, Pagination, Navigation } from 'swiper/modules';
import { createIcons, Menu, Search, ShoppingCart, Heart, User, MapPin, ChevronDown, X, Star, Truck, Mail, Phone, Clock, PackageCheck } from 'lucide';

window.Alpine = Alpine;

window.initSayedCartMap = () => {
  const mapElement = document.getElementById('sayedcart-map');
  const input = document.getElementById('sayedcart-location-input');
  const locationButton = document.getElementById('sayedcart-use-location');

  if (!mapElement || !input || !window.google?.maps) {
    return;
  }

  const defaultPosition = { lat: 34.052235, lng: -118.243683 };
  const map = new google.maps.Map(mapElement, {
    center: defaultPosition,
    zoom: 12,
    mapTypeControl: false,
    streetViewControl: false,
    fullscreenControl: false,
  });

  const marker = new google.maps.Marker({
    map,
    position: defaultPosition,
    draggable: true,
  });

  const geocoder = new google.maps.Geocoder();
  const autocomplete = new google.maps.places.Autocomplete(input, {
    fields: ['formatted_address', 'geometry', 'name'],
    types: ['geocode'],
  });

  const saveLocation = (address, position) => {
    input.value = address;
    localStorage.setItem('sayedcart_location', address);
    marker.setPosition(position);
    map.panTo(position);
  };

  autocomplete.addListener('place_changed', () => {
    const place = autocomplete.getPlace();

    if (!place.geometry?.location) {
      return;
    }

    saveLocation(place.formatted_address || place.name, place.geometry.location);
  });

  marker.addListener('dragend', () => {
    const position = marker.getPosition();

    geocoder.geocode({ location: position }, (results, status) => {
      if (status === 'OK' && results?.[0]) {
        saveLocation(results[0].formatted_address, position);
      }
    });
  });

  locationButton?.addEventListener('click', () => {
    if (!navigator.geolocation) {
      return;
    }

    navigator.geolocation.getCurrentPosition((current) => {
      const position = {
        lat: current.coords.latitude,
        lng: current.coords.longitude,
      };

      geocoder.geocode({ location: position }, (results, status) => {
        saveLocation(status === 'OK' && results?.[0] ? results[0].formatted_address : 'Current location', position);
      });
    });
  }, { once: true });
};

Alpine.data('countdown', () => ({
  target: new Date(Date.now() + 6 * 24 * 60 * 60 * 1000 + 12 * 60 * 60 * 1000),
  days: '00',
  hours: '00',
  minutes: '00',
  seconds: '00',
  init() {
    this.tick();
    setInterval(() => this.tick(), 1000);
  },
  tick() {
    const distance = Math.max(this.target - new Date(), 0);
    this.days = String(Math.floor(distance / 86400000)).padStart(2, '0');
    this.hours = String(Math.floor((distance % 86400000) / 3600000)).padStart(2, '0');
    this.minutes = String(Math.floor((distance % 3600000) / 60000)).padStart(2, '0');
    this.seconds = String(Math.floor((distance % 60000) / 1000)).padStart(2, '0');
  },
}));

Alpine.start();

AOS.init({
  duration: 650,
  once: true,
  easing: 'ease-out-cubic',
  offset: 70,
});

createIcons({
  icons: { Menu, Search, ShoppingCart, Heart, User, MapPin, ChevronDown, X, Star, Truck, Mail, Phone, Clock, PackageCheck },
});

Swiper.use([Autoplay, Pagination, Navigation]);

new Swiper('.hero-swiper', {
  loop: true,
  speed: 800,
  autoplay: { delay: 5200, disableOnInteraction: false },
  pagination: { el: '.hero-pagination', clickable: true },
});

new Swiper('.category-swiper', {
  modules: [Autoplay, Navigation],
  slidesPerView: 1.9,
  spaceBetween: 10,
  breakpoints: {
    480: { slidesPerView: 2.8 },
    768: { slidesPerView: 4.2 },
    1024: { slidesPerView: 6 },
  },
});

new Swiper('.featured-swiper', {
  slidesPerView: 1.15,
  spaceBetween: 18,
  breakpoints: {
    480: { slidesPerView: 2 },
    768: { slidesPerView: 3 },
    1024: { slidesPerView: 5 },
    1440: { slidesPerView: 6 },
  },
});
