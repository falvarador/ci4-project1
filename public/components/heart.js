class Heart extends HTMLElement {
    count;
    button;
    span;

    constructor() {
        super();
    }

    connectedCallback() {
        this.count = 0;
        this.button = this.querySelector('button');
        this.span = this.querySelector('span');

        const start = this.getAttribute("data-start");

        if (start) {
            let value = parseInt(start) || 0;
            this.span.textContent = value;
            this.count = value;
        }

        this.button.addEventListener("click", this);
    }

    disconnectedCallback() {
        this.button.removeEventListener("click", this);
    }

    handleEvent(event) {
        if (event.type === "click") this.handleClick();
    }

    handleClick() {
        this.count++;
        this.span.textContent = this.count.toString();
    }
}

customElements.define('heart-element', Heart);