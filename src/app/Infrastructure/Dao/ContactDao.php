<?php
namespace App\Infrastructure\Dao;
use \PDO;

/**
 * contactsテーブルとやりとりするクラス
 */
class ContactDao extends Dao
{
    /**
     * お問合せ情報を全件取得
     *
     * @return ?array
     */
    public function fetchAllContactsData(): ?array
    {
        $statement = $this->pdo->prepare('SELECT * FROM contacts');
        $statement->execute();
        $contacts = $statement->fetchAll();

        return $contacts ? $contacts : null;
    }

    /**
     * あいまい検索でデータを取得
     *
     * @var string $seachWord
     * @return ?array
     */
    public function fetchContactsDataBySearchWord(string $searchWord): ?array
    {
        $wordForAmbiguousSearch = '%' . $searchWord . '%';
        $sql =
            'SELECT * FROM contacts where title like :title or content like :content';
        $statement = $this->pdo->prepare($sql);
        $statement->bindvalue(
            ':title',
            $wordForAmbiguousSearch,
            PDO::PARAM_STR
        );
        $statement->bindValue(
            ':content',
            $wordForAmbiguousSearch,
            PDO::PARAM_STR
        );
        $statement->execute();
        $contacts = $statement->fetchAll();
        return $contacts ? $contacts : null;
    }
}
