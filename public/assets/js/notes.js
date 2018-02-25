// Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({

	el: '#notes',

	data: {

		newNote: {

			name: '',
			note: ''
		},

		submitted: false

	},

	computed: {

		errors: function() {

			for (var key in this.newNote) {

				if ( ! this.newNote[key]) return true;

			}

			return false;

		}

	},

	ready: function() {

		this.fetchNotes();

	},

	methods: {

		fetchNotes: function() {

			this.$http.get('/api/notes', function (notes) {

				this.$set('notes', notes);

			});

		},

		onSubmitForm: function(e) {

			// Prevent default action

			e.preventDefault();

			// Defines this.newNote as note

			var note = this.newNote;

			// Add new note to 'notes' array

			this.notes.push(note);

			// reset input values

			this.newNote = { name: '', note: ''};

			// Post Ajax request

			this.$http.post('api/notes', note);

			// Show thanks message

			this.submitted = true;

			// Hide submit button

		}

	}

});





Vue.transition('fade', {
  enter: function (el, done) {
    // element is already inserted into the DOM
    // call done when animation finishes.
    $(el)
      .css('opacity', 0)
      .animate({ opacity: 1 }, 1000, done)
  },
  enterCancelled: function (el) {
    $(el).stop()
  },
  leave: function (el, done) {
    // same as enter
    $(el).animate({ opacity: 0 }, 1000, done)
  },
  leaveCancelled: function (el) {
    $(el).stop()
  }
})
