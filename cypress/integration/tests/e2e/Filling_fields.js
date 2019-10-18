describe('Filling Fields', function() {
  it('Visits the form', function() {
    cy.visit('http://localhost:8000') // change URL to match your dev URL
  })

  it('Submit values', function() {
    cy.get('#Name').type('Teste')
    cy.get('#Age').type('77')
    cy.get('[type="radio"]').check('Male')
    cy.get('#Address').type('Rua Poinciana, 691')
    cy.get('#City').type('Belo Horizonte')
    cy.get('#State').select('MG').should('have.value', 'mg')
    cy.get('#District').type('Lindeia')
    cy.get('#Country').type('Brasil')
    cy.get('#E-mail').type('danielmarlon181@gmail.com')
    cy.get('#Login').type('Dragon')
    cy.get('#Password').type('Santinho')
    cy.get('[type="radio"]').check('Single')
    cy.get('#Comments').type('teste')
    cy.get('form').submit()
  })

  it('Checking the information', function() {
    cy.contains('Teste')
    cy.contains('77')
    cy.contains('Male')
    cy.contains('Rua Poinciana, 691')
    cy.contains('Belo Horizonte')
    cy.contains('mg')
    cy.contains('Lindeia')
    cy.contains('Brasil')
    cy.contains('danielmarlon181@gmail.com')
    cy.contains('Dragon')
    cy.contains('Santinho')
    cy.contains('Single')
    cy.contains('teste')
  })


})
