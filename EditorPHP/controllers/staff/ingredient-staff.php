<?php

include("../lib/DataTables.php");

use
	DataTables\Editor,
	DataTables\Editor\Field;
// DataTables\Editor\Format,
// DataTables\Editor\Mjoin,
// DataTables\Editor\Options,
// DataTables\Editor\Upload,
// DataTables\Editor\Validate,
// DataTables\Editor\ValidateOptions;

// ingredient table
Editor::inst($db, 'ingredient', 'ID')
	->fields(
		Field::inst('ingredient.name'),
		Field::inst('ingredient.description'),
		Field::inst('ingredient.price'),
		Field::inst('ingredient.extra'),
		Field::inst('ingredient.quantity')
	)
	->debug(true)
	->process($_POST)
	->json();

    /* vecchi fields utili per i vari controlli
    Field::inst('objects.first_name')
			->validator(
				Validate::notEmpty(
					ValidateOptions::inst()
						->message('A first name is required')
				)
			),
		Field::inst('objects.last_name')
			->validator(
				Validate::notEmpty(
					ValidateOptions::inst()
						->message('A last name is required')
				)
			),
		Field::inst('objects.position'),
		Field::inst('objects.email')
			->validator(
				Validate::email(
					ValidateOptions::inst()
						->message('Please enter an e-mail address')
				)
			),
		Field::inst('objects.office'),
		Field::inst('objects.extn'),
		Field::inst('objects.age')
			->validator(Validate::numeric())
			->setFormatter(Format::ifEmpty(null)),
		Field::inst('objects.salary')
			->validator(Validate::numeric())
			->setFormatter(Format::ifEmpty(null)),
		Field::inst('objects.start_date')
			->validator(Validate::dateFormat('Y-m-d'))
			->getFormatter(Format::dateSqlToFormat('Y-m-d'))
			->setFormatter(Format::dateFormatToSql('Y-m-d')) */