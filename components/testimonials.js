const testimonialsData = [
    {
        name: "Matthew Mole",
        feedback: "Max did an amazing job fixing my kitchen sink!"
    },
    {
        name: "Sandy Hatcher",
        feedback: "Max came on a Sunday evening to fix our burst pipe, which only finished after 11 the evening. Great service from him."
    },
    {
        name: "Rodger Fedora",
        feedback: "Lights kept tripping, Max sorted it out promptly. Great person, quality workmanship."
    }
]

function Testimonials() {
    return React.createElement(
        'div',
        null,
        testimonialsData.map((testimonial, index) =>
        React.createElement(
            'div',
            { key: index, className: 'testimonial'},
            React.createElement('h3', null, testimonial.name),
            React.createElement('p', null, testimonial.feedback)
            )
        )
    );
}

const DOMContainer = document.querySelector('#testimonials-root');
ReactDOM.render(React.createElement(Testimonials), DOMContainer);