const generateQuote = function () {
   const quotes = [
      {
         quote: '"You only live once, but if you do it right, once is enough."',
         author: "— Mae West"
      },{
         quote: '"I am so clever that sometimes I do not understand a single word of what I am saying."',
         author: "— Oscar Wilde"
      },{
         quote: '"Two things are infinite: the universe and human stupidity; and I am not sure about the universe."',
         author: "— Albert Einstein"
      },{
         quote: '"The most beautiful experience we can have is the mysterious. It is the fundamental emotion that stands at the cradle of true art and true science."',
         author: "— Albert Einstein"
      },{
         quote: '"It is our choices, Harry, that show what we truly are, far more than our abilities."',
         author: "— J.K. Rowling"
      },{
         quote: '"All men who have turned out worth anything have had the chief hand in their own education."',
         author: "— Walter Scott"
      },{
         quote: '"Trust yourself. You know more than you think you do."',
         author: "— Benjamin Spock"
      },{
         quote: '"No one can make you feel inferior without your consent."',
         author: "— Eleanor Roosevelt"
      },{
         quote: '"To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment."',
         author: "— Ralph Waldo Emerson"
      },{
         quote: '"Life is like riding a bicycle. To keep your balance you must keep moving."',
         author: "— Albert Einstein"
      },{
         quote: '"Just one small positive thought in the morning can change your whole day."',
         author: "— Dalai Lama"
      },{
         quote: '"If you really want to do something, you will find a way. If you do not, you will find an excuse."',
         author: "— Jim Rohn"
      },{
         quote: '"True humility is not thinking less of yourself; it is thinking of yourself less."',
         author: "— C.S. Lewis"
      },{
         quote: "The only source of knowledge is experience",
         author: "— Albert Einstein"
      },{
         quote: '"The future belongs to those who believe in the beauty of their dreams."',
         author: "— Eleanor Roosevelt"
      }
   ];

   let arrayIndex = Math.floor(Math.random() * quotes.length);
   document.getElementById("quotes").innerHTML = quotes[arrayIndex].quote;
   document.getElementById("author").innerHTML = quotes[arrayIndex].author;

}
window.onload = function () {
   generateQuote();
}