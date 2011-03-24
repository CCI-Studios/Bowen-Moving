(function (window, document, undefined) {
	
	function setupGroup(container) {
		var columns, height;
		
		columns = container.getElements('.moduletable');
		
		height = 0;
		columns.each(function(column) {
			if (column.getSize().size.y > height)
				height = column.getSize().size.y;
		});
		
		columns.each(function(column) {
			column.setStyle('height', height);
		});
	}
	
	window.addEvent('domready', function() {
		$$('.colContainer').each(function(container) {
			setupGroup(container);
		});
	})
	
})(this, this.document);