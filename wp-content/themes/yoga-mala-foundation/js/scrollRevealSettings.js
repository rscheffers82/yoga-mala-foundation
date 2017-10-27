window.sr = ScrollReveal( {
  origin: 'left',
  distance: '10px',
  viewFactor: 0.75,
  reset: false,
  duration: 750
});

sr.reveal('.mission', { origin: 'bottom'});
// sr.reveal('.columns', { container: '#programs', delay: 'onload' }, 2500);
sr.reveal('#programs', { viewFactor: 0.2 });
sr.reveal('#partners');
sr.reveal('#sponsors');
sr.reveal('#contact', { origin: 'bottom'});
