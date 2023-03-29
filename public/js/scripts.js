(function() {
  var __sections__ = {};
  (function() {
    for(var i = 0, s = document.getElementById('sections-script').getAttribute('data-sections').split(','); i < s.length; i++)
      __sections__[s[i]] = true;
  })();
  (function() {
  if (!__sections__["announcement-bar"]) return;
  try {
    

class LocalizationForm extends HTMLElement {
constructor() {
super();
this.elements = {
input: this.querySelector('input[name="locale_code"], input[name="country_code"]'),
button: this.querySelector('button'),
panel: this.querySelector('ul'),
};
this.elements.button.addEventListener('click', this.openSelector.bind(this));
this.elements.button.addEventListener('focusout', this.closeSelector.bind(this));
this.querySelectorAll('a').forEach(item => item.addEventListener('click', this.onItemClick.bind(this)));
}

onItemClick(event) {
event.preventDefault();
this.elements.input.value = event.currentTarget.dataset.value;
this.querySelector('form')?.submit();
}

openSelector() {
this.elements.button.focus();
this.elements.panel.toggleAttribute('hidden');
this.elements.button.setAttribute('aria-expanded', (this.elements.button.getAttribute('aria-expanded') === 'false').toString());
}

closeSelector(event) {
const shouldClose = event.relatedTarget && event.relatedTarget.nodeName === 'BUTTON';
if (event.relatedTarget === null || shouldClose) {
this.elements.button.setAttribute('aria-expanded', 'false');
this.elements.panel.setAttribute('hidden', true);
}
}
}

customElements.define('localization-form', LocalizationForm);

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["header"]) return;
  try {
    
  class StickyHeader extends HTMLElement {
    constructor() {
      super();
    }

    connectedCallback() {
      this.header = document.getElementById('shopify-section-header');
      this.headerBounds = {};
      this.currentScrollTop = 0;

      this.onScrollHandler = this.onScroll.bind(this);

      window.addEventListener('scroll', this.onScrollHandler, false);

      this.createObserver();
    }

    disconnectedCallback() {
      window.removeEventListener('scroll', this.onScrollHandler);
    }

    createObserver() {
      let observer = new IntersectionObserver((entries, observer) => {
        this.headerBounds = entries[0].intersectionRect;
        observer.disconnect();
      });

      observer.observe(this.header);
    }

    onScroll() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > this.currentScrollTop && scrollTop > this.headerBounds.bottom) {
        requestAnimationFrame(this.hide.bind(this));
      } else if (scrollTop < this.currentScrollTop && scrollTop > this.headerBounds.bottom) {
        requestAnimationFrame(this.reveal.bind(this));
      } else if (scrollTop <= this.headerBounds.top) {
        requestAnimationFrame(this.reset.bind(this));
      }

      this.currentScrollTop = scrollTop;
    }

    hide() {
      this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
      this.closeMenuDisclosure();
      this.closeSearchModal();
    }

    reveal() {
      this.header.classList.add('shopify-section-header-sticky', 'animate');
      this.header.classList.remove('shopify-section-header-hidden');
    }

    reset() {
      this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
    }

    closeMenuDisclosure() {
      this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
      this.disclosures.forEach(disclosure => disclosure.close());
    }

    closeSearchModal() {
      this.searchModal = this.searchModal || this.header.querySelector('details-modal');
      this.searchModal.close(false);
    }
  }

  customElements.define('sticky-header', StickyHeader);
    

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["main-cart-footer"]) return;
  try {
    
  class CartNote extends HTMLElement {
    constructor() {
      super();

      this.addEventListener('change', debounce((event) => {
        const body = JSON.stringify({ note: event.target.value });
        fetch(`${routes.cart_update_url}`, {...fetchConfig(), ...{ body }});
      }, 300))
    }
  }

  customElements.define('cart-note', CartNote);

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["main-product"]) return;
  try {
    

  class ProductModal extends ModalDialog {
    constructor() {
      super();
    }

    hide() {
      super.hide();
      window.pauseAllMedia();
    }

    show(opener) {
      super.show(opener);
      this.showActiveMedia();
    }

    showActiveMedia() {
      this.querySelectorAll(`[data-media-id]:not([data-media-id="${this.openedBy.getAttribute("data-media-id")}"])`).forEach((element) => {
          element.classList.remove('active');
        }
      )
      const activeMedia = this.querySelector(`[data-media-id="${this.openedBy.getAttribute("data-media-id")}"]`);
      activeMedia.classList.add('active');
      activeMedia.scrollIntoView();

      if (activeMedia.nodeName == 'DEFERRED-MEDIA' && activeMedia.querySelector('template')?.content?.querySelector('.js-youtube'))
        activeMedia.loadContent();
    }
  }

  customElements.define('product-modal', ProductModal);

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["product-recommendations"]) return;
  try {
    
  class ProductRecommendations extends HTMLElement {
    constructor() {
      super();

      const handleIntersection = (entries, observer) => {
        if (!entries[0].isIntersecting) return;
        observer.unobserve(this);

        fetch(this.dataset.url)
          .then(response => response.text())
          .then(text => {
            const html = document.createElement('div');
            html.innerHTML = text;
            const recommendations = html.querySelector('product-recommendations');
            if (recommendations && recommendations.innerHTML.trim().length) {
              this.innerHTML = recommendations.innerHTML;
            }
			if (html.querySelector('.product-recommendations .grid__item')) {
                this.classList.add('product-recommendations--loaded');			  
             	initButtons();
                initButtonsCompare();
            }
          })
          .catch(e => {
            console.error(e);
          });
      }

      new IntersectionObserver(handleIntersection.bind(this), {rootMargin: '0px 0px 3000px 0px'}).observe(this);
    }
  }

  customElements.define('product-recommendations', ProductRecommendations);

  } catch(e) { console.error(e); }
})();

})();
