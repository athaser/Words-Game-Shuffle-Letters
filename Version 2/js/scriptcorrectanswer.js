// ~* for fun *~ //
const quotes = [
  'well done',
 
]

// start js
const random = max => {
  return Math.floor(Math.random() * Math.floor(max))
}
const degs = [-10, -5, 0, 5, 10] // match $degs list
const numColors = 10
var colors = Array.from(Array(numColors).keys())
var app = new Vue({
  el: '#app',
  data: {
    colors: colors,
    degs: degs,
    quote: quotes[random(quotes.length)]
  },
  computed: {
    words: function() {
      return this.quote.split(' ')
    }
  },
  methods: {
    bg: function() {
      let n = this.colors[random(this.colors.length)]
      return `color-${n}`
    },
    pattern: function() {
      return `pattern pattern-${random(5) + 1}` // number of patterns
    },
    rotate: function() {
      return `deg${this.degs[random(degs.length)]}`
    },
    reload: function() {
      this.quote = quotes[random(quotes.length)]
    }
  }
});