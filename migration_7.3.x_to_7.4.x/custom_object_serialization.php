<?php
// Возвращает массив, содержащий все необходимое состояние объекта.
public function __serialize(): array;

// Восстанавливает состояние объекта из указанного массива данных.
public function __unserialize(array $data): void;
