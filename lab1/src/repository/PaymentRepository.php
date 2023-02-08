<?php
require_once 'Repository.php';
require_once __DIR__ . '/../models/Payment.php';
class PaymentRepository extends Repository
{
    public function getPayment(int $id): ?Payment
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.payments WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $payment = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($payment == false) {
            return null;
        }

        return new Payment(
            $payment['payment_number'],
            $payment['id_user_pay'],
            $payment['street_name'],
            $payment['register_number'],
            $payment['parking_time']
        );
    }
    public function addPayment(Payment $payment): void
    {
        $stmt = $this->database->connect()->prepare('
INSERT INTO payments (payment_number, street_name, register_number, parking_time)        
            VALUES (?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $payment->getPaymentNumber(),
            $payment->getStreetName(),
            $payment->getRegisterNumber(),
            $payment->getParkingTime()
        ]);
    }

    public function getPays(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM payments;
        ');
        $stmt->execute();
        $pays = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($pays as $pay) {
            $result[] = new Payment(
                $pay['payment_number'],
                $pay['street_name'],
                $pay['register_number'],
                $pay['parking_time']
            );
        }

        return $result;
    }
}