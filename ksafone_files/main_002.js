
similarproducts.Retargeting  =
{
	$: spsupport.p.$,
	appDomain: spsupport.p.sfDomain,
	serverLayerFrame: null,
	serverData:
	{
		items: [],
		sessionId: null
	},

	initialize: function()
	{
		var sb = similarproducts.b;
		var serverLayerFrameParams =
		{
			dlsource: sb.dlsource,
			userid: sb.userid,
			CD_CTID: sb.CD_CTID,
			version: sb.appVersion,
			pageUrl: location.href,
			merchantName: this.utils.extractDomainName(location.hostname),
			appDomain: this.appDomain,
			imageDomain: similarproducts.b.itemImgUrl
		};

		this.$(window).bind("message", this.utils.serverMessagesRouter.bind(this));

		this.serverLayerFrame = this.$('<iframe />',
		{
			style: 'position:absolute; width:0; height:0; left:-100px; top:-100px;',
			src: this.appDomain + 'retargeting/server_layer.html?' + this.utils.compileQueryString(serverLayerFrameParams)+similarproducts.utilities.abTestUtil.getDataString()
		})[0];

		document.body.appendChild(this.serverLayerFrame);
	},

	processServerData: function(data) // This function is called by the "utils.serverMessagesRouter" func via the "fn" param send by the server layer
	{
		this.serverData = data;

		similarproducts.Template.initialize(data.template);
		similarproducts.slider.initialize(data.items, 14);

		localStorage.setItem('_sfRetargetShown', new Date().getTime());
	}
};


similarproducts.Retargeting.utils =
{
	extractDomainName: function(url)
	{
		var slicedUrl = url.toLowerCase().split('.');
        var length = slicedUrl.length;
        var tldRegex = /^(com|net|info|org|gov|co)$/; //TLD regex

        if (length > 2) // i.e. www.google.com.br, google.co.il, test.example.com
        {
            if (tldRegex.test(slicedUrl[length-2])) // Check second to last part if it passes the TLD regex.
            {
                slicedUrl.splice(0, length-3);
            }
            else
            {
                slicedUrl.splice(0, length-2);
            }
        }

        return slicedUrl.join('.');
	},

	compileQueryString: function(obj)
	{
		var result = [];

		for (key in obj)
		{
			if (obj.hasOwnProperty(key))
			{
				result.push(key + '=' + encodeURIComponent(obj[key]));
			}
		}

		return result.join('&');
	},

	serverMessagesRouter: function(event)
	{
		var data = event.originalEvent.data.split('__similarproductsRetargetingNamespaceMarker')[1];

		data = data && JSON.parse(data) || null;

		if (data && typeof this[data.fn] === 'function')
		{
			this[data.fn](data.data);
		}
	},

	sendMessageToServerLayer: function(fn, data)
	{
		var targetWindow = this.serverLayerFrame.contentWindow || this.serverLayerFrame;
		var message =
        {
            fn: fn,
            data: data
        };

        targetWindow.postMessage('__similarproductsRetargetingNamespaceMarker'+JSON.stringify(message), '*');
	}
};

similarproducts.util =
{
	sendRequest: function(message) // Old interface to the stupid, stupid method of sending an obscure "cmd" param
	{
		var data = JSON.parse(message);

		similarproducts.Retargeting.utils.sendMessageToServerLayer.call(similarproducts.Retargeting, 'oldCmdInterface', data);
	}
};


similarproducts.Retargeting.initialize();
