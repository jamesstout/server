<?php
declare(strict_types=1);
/**
 * @copyright Copyright (c) 2019, Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @author Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCA\Files\Migration;

use Closure;
use OCP\DB\ISchemaWrapper;
use OCP\Migration\SimpleMigrationStep;
use OCP\Migration\IOutput;

class Version11301Date20191113195931 extends SimpleMigrationStep {

	/**
	 * @param IOutput $output
	 * @param Closure $schemaClosure The `\Closure` returns a `ISchemaWrapper`
	 * @param array $options
	 * @return null|ISchemaWrapper
	 */
	public function changeSchema(IOutput $output, Closure $schemaClosure, array $options) {
		/** @var ISchemaWrapper $schema */
		$schema = $schemaClosure();

		/*
		 * Disabled because it breaks installing on Oracle
		$table = $schema->createTable('user_transfer_ownership');
		$table->addColumn('id', 'integer', [
			'autoincrement' => true,
			'notnull' => true,
			'length' => 4,
		]);
		$table->addColumn('source_user', 'string', [
			'notnull' => true,
			'length' => 64,
		]);
		$table->addColumn('target_user', 'string', [
			'notnull' => true,
			'length' => 64,
		]);
		$table->addColumn('file_id', 'bigint', [
			'notnull' => true,
			'length' => 20,
		]);
		$table->addColumn('node_name', 'string', [
			'notnull' => true,
			'length' => 255,
		]);
		$table->setPrimaryKey(['id']);

		return $schema;
		 */
	}

}
