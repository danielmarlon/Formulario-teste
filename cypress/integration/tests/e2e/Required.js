describe('Page Test', function() {
  it('visits form test', function() {
    cy.visit('http://localhost:8000')

    cy.contains('Name')
    cy.contains('Age')
    cy.contains('Gender')
    cy.contains('Address')
    cy.contains('City')
    cy.contains('State')
    cy.contains('District')
    cy.contains('Country')
    cy.contains('E-mail')
    cy.contains('Login')
    cy.contains('Password')
    cy.contains('Civil Status')
    cy.contains('Comments')
    cy.contains('Submit').click()


  })
})
