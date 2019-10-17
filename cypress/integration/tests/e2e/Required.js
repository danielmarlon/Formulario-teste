describe('My first test', function() {
  it('Visits the form', function() {
    cy.visit('http://localhost:8000') // change URL to match your dev URL
  })

  it('Submit values', function() {
    cy.get('#Name')
    cy.get('#Age')
    cy.get('[type="radio"]')
    cy.get('#Address')
    cy.get('#City')
    cy.get('#State')
    cy.get('#District')
    cy.get('#Country')
    cy.get('#E-mail').type('danielmarlon181@gmail.com')
    cy.get('#Login')
    cy.get('#Password')
    cy.get('[type="radio"]').check('Single')
    cy.get('#Comments').type('teste')
    cy.get('input[name="Register"]').click()
  })
  it('checking if the fields have not been filled', function(){
    cy.contains('Name field needs to be filled in!')
    cy.contains('Age field needs to be filled in!')
    cy.contains('Gender field needs to be filled in!')
    cy.contains('Address field needs to be filled in!')
    cy.contains('City field needs to be filled in!')
    cy.contains('District field needs to be filled in!')
    cy.contains('Country field needs to be filled in!')
    cy.contains('Login field needs to be filled in!')
    cy.contains('Password field needs to be filled in!')
  })
})
