!function(a,b){"use strict";var c,d;c=a.MediaWidgetModel.extend({}),d=a.MediaWidgetControl.extend({events:_.extend({},a.MediaWidgetControl.prototype.events,{"click .media-widget-preview.populated":"editMedia"}),renderPreview:function(){var a,b,c,d,e,f=this;(f.model.get("attachment_id")||f.model.get("url"))&&(a=f.$el.find(".media-widget-preview"),b=wp.template("wp-media-widget-image-preview"),a.html(b(f.previewTemplateProps.toJSON())),a.addClass("populated"),e=f.$el.find(".link"),e.is(document.activeElement)||(c=f.$el.find(".media-widget-fields"),d=wp.template("wp-media-widget-image-fields"),c.html(d(f.previewTemplateProps.toJSON()))))},editMedia:function(){var a,c,d,e,f=this;e=f.mapModelToMediaFrameProps(f.model.toJSON()),"none"===e.link&&(e.linkUrl=""),a=wp.media({frame:"image",state:"image-details",metadata:e}),a.$el.addClass("media-widget"),c=function(){var b,c;b=a.state().attributes.image.toJSON(),c=b.link,b.link=b.linkUrl,f.selectedAttachment.set(b),f.displaySettings.set("link",c),f.model.set(_.extend(f.mapMediaToModelProps(b),{error:!1}))},a.state("image-details").on("update",c),a.state("replace-image").on("replace",c),d=wp.media.model.Attachment.prototype.sync,wp.media.model.Attachment.prototype.sync=function(){return b.Deferred().rejectWith(this).promise()},a.on("close",function(){a.detach(),wp.media.model.Attachment.prototype.sync=d}),a.open()},getEmbedResetProps:function(){return _.extend(a.MediaWidgetControl.prototype.getEmbedResetProps.call(this),{size:"full",width:0,height:0})},getModelPropsFromMediaFrame:function(b){var c=this;return _.omit(a.MediaWidgetControl.prototype.getModelPropsFromMediaFrame.call(c,b),"image_title")},mapModelToPreviewTemplateProps:function(){var b,c,d=this;return c=d.model.get("url"),b=a.MediaWidgetControl.prototype.mapModelToPreviewTemplateProps.call(d),b.currentFilename=c?c.replace(/\?.*$/,"").replace(/^.+\//,""):"",b.link_url=d.model.get("link_url"),b}}),a.controlConstructors.media_image=d,a.modelConstructors.media_image=c}(wp.mediaWidgets,jQuery);