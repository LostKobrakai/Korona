$(document).ready(function(){
		function Accordion(selector){
		this.accordion = $(selector);
		this.items = [];

		this.getItems = function(items, handle, panel){
			var items = $(items);
			for (var i = 0; i < items.length; i++) {
				this.items.push(new AccItem(items[i], handle, panel, this));
			};
			$(window).bind("resize", {obj: this}, function(e){
				for (var i = e.data.obj.items.length - 1; i >= 0; i--) {
					if(e.data.obj.items[i].active) e.data.obj.items[i].recalculateHeight();
				};
			});
		}
	}

	function AccItem(item, handle, panel, obj){
		this.item = $(item);
		this.handle = this.item.find(handle).first();
		this.panel = this.item.find(panel).first();
		this.active = false;
		this.parentObj = obj;
		this.download = false;

		this.getItems = function(handle, formular){
			this.download = new DownloadItem(handle, formular, this);
		}

		this.toggleActive = function(){
			if(this.active){
				if(this.download.active) this.download.toggleActive();
				this.panel.removeClass("active");
				this.panel.css("height", "");
			}else{
				var h = this.getPanelHeight();
				this.panel.addClass("active");
				this.panel.css("height", h);
			}
			this.handle.toggleClass("active");
			this.active = this.active ? false : true;
		};

		this.getPanelHeight = function(){
			return this.panel.find(".d-info").height();
		}

		this.getFormHeight = function(){
			return this.panel.find(".d-form > div").height();
		}

		this.recalculateHeight = function(){
			var f = (this.download && this.download.active) ? this.getFormHeight() : 0;
			this.panel.css("height", this.getPanelHeight() + f);
		}

		this.handle.bind("click", {obj: this}, function(e){
			e.data.obj.toggleActive();
		});
	}

	DownloadItem = function(handle, formular, obj){
		this.parentObj = obj;
		this.item = $(obj.item);
		this.handle = $(handle, this.item);
		this.formular = this.item.find(formular).first();
		this.active = false;

		this.toggleActive = function(){
			if(this.active){
				var h = this.parentObj.getPanelHeight();
				this.formular.removeClass("active");
				this.parentObj.panel.css("height", h);
			}else{
				var h = (this.parentObj.getPanelHeight() + this.parentObj.getFormHeight());
				console.log(this.parentObj.getFormHeight())
				this.formular.addClass("active");
				this.parentObj.panel.css("height", h);
			}
			this.active = this.active ? false : true;
		};

		for (var i = this.handle.length - 1; i >= 0; i--) {
			this.handle.eq(i).bind("click", {obj: this}, function(e){
				e.data.obj.toggleActive();
			});
		};
	}


	var accordion = new Accordion(".accordion");
	accordion.getItems(".acc-item", ".acc-handle", ".acc-panel");
	for (var i = accordion.items.length - 1; i >= 0; i--) {
		accordion.items[i].getItems(".d-handle", ".d-form");
	};


	console.log(accordion);
});
