![frodriFulp - GitHub Profile](https://raw.githubusercontent.com/frodriFulp/PHP-practic-SKILLS_UP/main/propuesta-logo-pfae.png)
# Online Registration Form - PHP practic 1ª part

In this project, you'll build a responsive, mobile-friendly registration form using a wide variety of HTML form input types and attributes. Using the supplied mockup files, you'll build a mobile (optional) and desktop version of the form using media queries, and a "mobile-first" approach (optional).
## Project Instructions

### Build the layout using a web first design:

- Make sure the HTML file includes the viewport meta tag in the head of the document.

- Look at the provided mockup (desktop-form.png) and add the same content to your **index.html** file.

NOTE: It's okay if your checkboxes and radio buttons don't match the look of those in the mockups. It's perfectly fine to use the standard default radio buttons and checkboxes.

### Create the form structure:

- Only use one tag. The tag should contain all the form elements.

- Add a fieldset and legend for each of the following sections:
  - "Contact Information" section of the page, and
  - The "Newsletter" section of the page

**Note:** You need to make a functioning form. To do that, you'd need to add some server-side programming to actually process the user's input.

### Make sure you include the following form field types:

- text input
- email input
- telephone input
- select menu
- checkboxes
- radio buttons
- textarea
- submit button

### Form fields should include the following attributes:

- input: should include id, type and name attributes.

- select and textarea: should include id and name attributes.

NOTE: Checkboxes should have identical name attributes but unique value attributes. Radio Buttons should have identical name attributes but unique value attributes .

- Add labels to each form element using the HTML tag. The text inside the labels should match the names of the form fields in the mockups. Make sure you properly pair each element with its corresponding form control via the for attribute. And don't forget about the textarea element. That needs a functioning label too.

NOTE: Remember that to associate a label with a form input element, the label’s “for” attribute should match the input’s unique id.

- Use the input field's placeholder attribute to add the text "required" to:
  - the Full Name field
  - the Email address field
  
  
### OPTIONAL

### Once you have everything in place for the mobile layout, use a media query to add a breakpoint to adjust the layout for wider tablet and desktop screens:

- Match the design as it should look on a tablet or desktop that is 768px wide using the desktop-form.png mockup.

- Use a mobile-first approach by writing your media queries using the min-width property in your CSS.

- Once all your breakpoints are in place, double check your layout matches both the mockups.

### Check that the label text position matches both mockups:

- Mobile: Text should be above the form field.

- Desktop: Text should be to the left side of the form field. Use a Google Font for the text.

#### The design uses the "Merriweather" font but, you can use any Google Font that you'd like.

#### Add :focus states to the form for when a user clicks or tabs into a text field.

## Extra Credit

- Additional placeholder text for other text fields.

- Use the required attribute to add HTML5 validation to make sure that required fields are filled out and input is formatted correctly.

**Optional**
- Add at least the following additional styling enhancements to the form, feel free to add extra styling but leave the basic layout the same as the mockup: 
  - Change the background color for at least ONE of the main sections of the site. 
  - Use CSS transitions for focus states. 
  - Use CSS transition effects for highlighting the look of the form fields. For example, make a background color fade into view when the user clicks on a text field, and fade out when the user clicks or tabs out of the field.

## Project Resources 
 [Your first HTML form](https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/Your_first_HTML_form)

[Configuring the Viewport](https://developer.mozilla.org/en-US/docs/Mozilla/Mobile/Viewport_meta_tag)

[Using label elements to associate text labels with form controls](https://www.w3.org/TR/WCAG20-TECHS/H44.html)

[Formatting form placeholder text](https://css-tricks.com/almanac/selectors/p/placeholder/)

==== **OPTIONAL** ====

[The :focus pseudo-class ](https://developer.mozilla.org/en-US/docs/Web/CSS/:focus0)

[Getting Started with Google Fonts](https://developers.google.com/fonts/docs/getting_started)

[Google Font: Merriweather](https://fonts.google.com/specimen/Merriweather)