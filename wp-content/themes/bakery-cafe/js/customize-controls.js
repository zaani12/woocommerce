( function( api ) {

	// Extends our custom "bakery-cafe" section.
	api.sectionConstructor['bakery-cafe'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );