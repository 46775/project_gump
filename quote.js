document.addEventListener("DOMContentLoaded", function() {
    const quotes = [
      " Study hard, for the act of learning is the ignition of wisdom's flame.",
      " Focus is the flashlight guiding you through the maze of knowledge.",
      " In the realm of online study, the world becomes your classroom and curiosity your compass.",
      " Every moment spent studying is an investment in the future you envision.",
      " Distractions fade when determination takes the lead in the dance of focus.",
      " Online study: where the click of a mouse opens the door to endless possibilities.",
      " The key to success lies not just in what you study, but in how deeply you immerse yourself in the subject.",
      " In the symphony of learning, concentration is the conductor, guiding each note to perfection.",
      " With each page turned, a new chapter of understanding unfolds."
    ];
  
    const quoteElement = document.getElementById("quote");
    let index = 0;
  
    function changeQuote() {
      quoteElement.textContent = quotes[index];
      index = (index + 1) % quotes.length; 
    }
  
    changeQuote();
  
    setInterval(changeQuote, 20000);
  });
  